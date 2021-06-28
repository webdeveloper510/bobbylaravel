<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('image.title') ? 'invalid' : '' }}">
        <label class="form-label" for="title">{{ trans('cruds.image.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" wire:model.defer="image.title">
        <div class="validation-message">
            {{ $errors->first('image.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.image.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.image_image') ? 'invalid' : '' }}">
        <label class="form-label" for="image">{{ trans('cruds.image.fields.image') }}</label>
        <x-dropzone id="image" name="image" action="{{ route('admin.images.storeMedia') }}" collection-name="image_image" max-file-size="5" max-width="4096" max-height="4096" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.image_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.image.fields.image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('image.category_id') ? 'invalid' : '' }}">
        <label class="form-label" for="category">{{ trans('cruds.image.fields.category') }}</label>
        <x-select-list class="form-control" id="category" name="category" :options="$this->listsForFields['category']" wire:model="image.category_id" />
        <div class="validation-message">
            {{ $errors->first('image.category_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.image.fields.category_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('tags') ? 'invalid' : '' }}">
        <label class="form-label" for="tags">{{ trans('cruds.image.fields.tags') }}</label>
        <x-select-list class="form-control" id="tags" name="tags" wire:model="tags" :options="$this->listsForFields['tags']" multiple />
        <div class="validation-message">
            {{ $errors->first('tags') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.image.fields.tags_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.images.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>