<?php

namespace App\Http\Livewire\Image;

use App\Models\ContentCategory;
use App\Models\ContentTag;
use App\Models\Image;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Edit extends Component
{
    public Image $image;

    public array $tags = [];

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function mount(Image $image)
    {
        $this->image = $image;
        $this->tags  = $this->image->tags()->pluck('id')->toArray();
        $this->initListsForFields();
        $this->mediaCollections = [
            'image_image' => $image->image,
        ];
    }

    public function render()
    {
        return view('livewire.image.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->image->save();
        $this->image->tags()->sync($this->tags);
        $this->syncMedia();

        return redirect()->route('admin.images.index');
    }

    public function addMedia($media): void
    {
        $this->mediaCollections[$media['collection_name']][] = $media;
    }

    public function removeMedia($media): void
    {
        $collection = collect($this->mediaCollections[$media['collection_name']]);

        $this->mediaCollections[$media['collection_name']] = $collection->reject(fn ($item) => $item['uuid'] === $media['uuid'])->toArray();

        $this->mediaToRemove[] = $media['uuid'];
    }

    public function getMediaCollection($name)
    {
        return $this->mediaCollections[$name];
    }

    protected function rules(): array
    {
        return [
            'image.title' => [
                'string',
                'nullable',
            ],
            'mediaCollections.image_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.image_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'image.category_id' => [
                'integer',
                'exists:content_categories,id',
                'nullable',
            ],
            'tags' => [
                'array',
            ],
            'tags.*.id' => [
                'integer',
                'exists:content_tags,id',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['category'] = ContentCategory::pluck('name', 'id')->toArray();
        $this->listsForFields['tags']     = ContentTag::pluck('name', 'id')->toArray();
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->image->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
