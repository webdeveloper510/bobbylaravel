<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 24,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 25,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 26,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 27,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 28,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 29,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 30,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 31,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 32,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 33,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 34,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 35,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 36,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 37,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 38,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 39,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 40,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 41,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 42,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 43,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 44,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 45,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 46,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 47,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 48,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 49,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 50,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 51,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 52,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 53,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 54,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 55,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 56,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 57,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 58,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 59,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 60,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 61,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 62,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 63,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 64,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 65,
                'title' => 'client_type_create',
            ],
            [
                'id'    => 66,
                'title' => 'client_type_edit',
            ],
            [
                'id'    => 67,
                'title' => 'client_type_show',
            ],
            [
                'id'    => 68,
                'title' => 'client_type_delete',
            ],
            [
                'id'    => 69,
                'title' => 'client_type_access',
            ],
            [
                'id'    => 70,
                'title' => 'client_create',
            ],
            [
                'id'    => 71,
                'title' => 'client_edit',
            ],
            [
                'id'    => 72,
                'title' => 'client_show',
            ],
            [
                'id'    => 73,
                'title' => 'client_delete',
            ],
            [
                'id'    => 74,
                'title' => 'client_access',
            ],
            [
                'id'    => 75,
                'title' => 'patient_management_access',
            ],
            [
                'id'    => 76,
                'title' => 'ethnicity_create',
            ],
            [
                'id'    => 77,
                'title' => 'ethnicity_edit',
            ],
            [
                'id'    => 78,
                'title' => 'ethnicity_show',
            ],
            [
                'id'    => 79,
                'title' => 'ethnicity_delete',
            ],
            [
                'id'    => 80,
                'title' => 'ethnicity_access',
            ],
            [
                'id'    => 81,
                'title' => 'gender_create',
            ],
            [
                'id'    => 82,
                'title' => 'gender_edit',
            ],
            [
                'id'    => 83,
                'title' => 'gender_show',
            ],
            [
                'id'    => 84,
                'title' => 'gender_delete',
            ],
            [
                'id'    => 85,
                'title' => 'gender_access',
            ],
            [
                'id'    => 86,
                'title' => 'orders_management_access',
            ],
            [
                'id'    => 87,
                'title' => 'distance_create',
            ],
            [
                'id'    => 88,
                'title' => 'distance_edit',
            ],
            [
                'id'    => 89,
                'title' => 'distance_show',
            ],
            [
                'id'    => 90,
                'title' => 'distance_delete',
            ],
            [
                'id'    => 91,
                'title' => 'distance_access',
            ],
            [
                'id'    => 92,
                'title' => 'contact_method_create',
            ],
            [
                'id'    => 93,
                'title' => 'contact_method_edit',
            ],
            [
                'id'    => 94,
                'title' => 'contact_method_show',
            ],
            [
                'id'    => 95,
                'title' => 'contact_method_delete',
            ],
            [
                'id'    => 96,
                'title' => 'contact_method_access',
            ],
            [
                'id'    => 97,
                'title' => 'contact_time_create',
            ],
            [
                'id'    => 98,
                'title' => 'contact_time_edit',
            ],
            [
                'id'    => 99,
                'title' => 'contact_time_show',
            ],
            [
                'id'    => 100,
                'title' => 'contact_time_delete',
            ],
            [
                'id'    => 101,
                'title' => 'contact_time_access',
            ],
            [
                'id'    => 102,
                'title' => 'patient_create',
            ],
            [
                'id'    => 103,
                'title' => 'patient_edit',
            ],
            [
                'id'    => 104,
                'title' => 'patient_show',
            ],
            [
                'id'    => 105,
                'title' => 'patient_delete',
            ],
            [
                'id'    => 106,
                'title' => 'patient_access',
            ],
            [
                'id'    => 107,
                'title' => 'package_create',
            ],
            [
                'id'    => 108,
                'title' => 'package_edit',
            ],
            [
                'id'    => 109,
                'title' => 'package_show',
            ],
            [
                'id'    => 110,
                'title' => 'package_delete',
            ],
            [
                'id'    => 111,
                'title' => 'package_access',
            ],
            [
                'id'    => 112,
                'title' => 'order_status_create',
            ],
            [
                'id'    => 113,
                'title' => 'order_status_edit',
            ],
            [
                'id'    => 114,
                'title' => 'order_status_show',
            ],
            [
                'id'    => 115,
                'title' => 'order_status_delete',
            ],
            [
                'id'    => 116,
                'title' => 'order_status_access',
            ],
            [
                'id'    => 117,
                'title' => 'image_create',
            ],
            [
                'id'    => 118,
                'title' => 'image_edit',
            ],
            [
                'id'    => 119,
                'title' => 'image_show',
            ],
            [
                'id'    => 120,
                'title' => 'image_delete',
            ],
            [
                'id'    => 121,
                'title' => 'image_access',
            ],
            [
                'id'    => 122,
                'title' => 'sponsor_create',
            ],
            [
                'id'    => 123,
                'title' => 'sponsor_edit',
            ],
            [
                'id'    => 124,
                'title' => 'sponsor_show',
            ],
            [
                'id'    => 125,
                'title' => 'sponsor_delete',
            ],
            [
                'id'    => 126,
                'title' => 'sponsor_access',
            ],
            [
                'id'    => 127,
                'title' => 'protocol_create',
            ],
            [
                'id'    => 128,
                'title' => 'protocol_edit',
            ],
            [
                'id'    => 129,
                'title' => 'protocol_show',
            ],
            [
                'id'    => 130,
                'title' => 'protocol_delete',
            ],
            [
                'id'    => 131,
                'title' => 'protocol_access',
            ],
            [
                'id'    => 132,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 133,
                'title' => 'cro_create',
            ],
            [
                'id'    => 134,
                'title' => 'cro_edit',
            ],
            [
                'id'    => 135,
                'title' => 'cro_show',
            ],
            [
                'id'    => 136,
                'title' => 'cro_delete',
            ],
            [
                'id'    => 137,
                'title' => 'cro_access',
            ],
            [
                'id'    => 138,
                'title' => 'order_create',
            ],
            [
                'id'    => 139,
                'title' => 'order_edit',
            ],
            [
                'id'    => 140,
                'title' => 'order_show',
            ],
            [
                'id'    => 141,
                'title' => 'order_delete',
            ],
            [
                'id'    => 142,
                'title' => 'order_access',
            ],
            [
                'id'    => 143,
                'title' => 'patient_status_create',
            ],
            [
                'id'    => 144,
                'title' => 'patient_status_edit',
            ],
            [
                'id'    => 145,
                'title' => 'patient_status_show',
            ],
            [
                'id'    => 146,
                'title' => 'patient_status_delete',
            ],
            [
                'id'    => 147,
                'title' => 'patient_status_access',
            ],
            [
                'id'    => 148,
                'title' => 'order_patient_create',
            ],
            [
                'id'    => 149,
                'title' => 'order_patient_edit',
            ],
            [
                'id'    => 150,
                'title' => 'order_patient_show',
            ],
            [
                'id'    => 151,
                'title' => 'order_patient_delete',
            ],
            [
                'id'    => 152,
                'title' => 'order_patient_access',
            ],
            [
                'id'    => 153,
                'title' => 'patient_contact_log_create',
            ],
            [
                'id'    => 154,
                'title' => 'patient_contact_log_edit',
            ],
            [
                'id'    => 155,
                'title' => 'patient_contact_log_show',
            ],
            [
                'id'    => 156,
                'title' => 'patient_contact_log_delete',
            ],
            [
                'id'    => 157,
                'title' => 'patient_contact_log_access',
            ],
            [
                'id'    => 158,
                'title' => 'medication_create',
            ],
            [
                'id'    => 159,
                'title' => 'medication_edit',
            ],
            [
                'id'    => 160,
                'title' => 'medication_show',
            ],
            [
                'id'    => 161,
                'title' => 'medication_delete',
            ],
            [
                'id'    => 162,
                'title' => 'medication_access',
            ],
            [
                'id'    => 163,
                'title' => 'network_create',
            ],
            [
                'id'    => 164,
                'title' => 'network_edit',
            ],
            [
                'id'    => 165,
                'title' => 'network_show',
            ],
            [
                'id'    => 166,
                'title' => 'network_delete',
            ],
            [
                'id'    => 167,
                'title' => 'network_access',
            ],
            [
                'id'    => 168,
                'title' => 'therapeutic_area_create',
            ],
            [
                'id'    => 169,
                'title' => 'therapeutic_area_edit',
            ],
            [
                'id'    => 170,
                'title' => 'therapeutic_area_show',
            ],
            [
                'id'    => 171,
                'title' => 'therapeutic_area_delete',
            ],
            [
                'id'    => 172,
                'title' => 'therapeutic_area_access',
            ],
            [
                'id'    => 173,
                'title' => 'indication_create',
            ],
            [
                'id'    => 174,
                'title' => 'indication_edit',
            ],
            [
                'id'    => 175,
                'title' => 'indication_show',
            ],
            [
                'id'    => 176,
                'title' => 'indication_delete',
            ],
            [
                'id'    => 177,
                'title' => 'indication_access',
            ],
            [
                'id'    => 178,
                'title' => 'study_create',
            ],
            [
                'id'    => 179,
                'title' => 'study_edit',
            ],
            [
                'id'    => 180,
                'title' => 'study_show',
            ],
            [
                'id'    => 181,
                'title' => 'study_delete',
            ],
            [
                'id'    => 182,
                'title' => 'study_access',
            ],
            [
                'id'    => 183,
                'title' => 'answer_type_create',
            ],
            [
                'id'    => 184,
                'title' => 'answer_type_edit',
            ],
            [
                'id'    => 185,
                'title' => 'answer_type_show',
            ],
            [
                'id'    => 186,
                'title' => 'answer_type_delete',
            ],
            [
                'id'    => 187,
                'title' => 'answer_type_access',
            ],
            [
                'id'    => 188,
                'title' => 'patient_source_create',
            ],
            [
                'id'    => 189,
                'title' => 'patient_source_edit',
            ],
            [
                'id'    => 190,
                'title' => 'patient_source_show',
            ],
            [
                'id'    => 191,
                'title' => 'patient_source_delete',
            ],
            [
                'id'    => 192,
                'title' => 'patient_source_access',
            ],
            [
                'id'    => 193,
                'title' => 'order_user_create',
            ],
            [
                'id'    => 194,
                'title' => 'order_user_edit',
            ],
            [
                'id'    => 195,
                'title' => 'order_user_show',
            ],
            [
                'id'    => 196,
                'title' => 'order_user_delete',
            ],
            [
                'id'    => 197,
                'title' => 'order_user_access',
            ],
            [
                'id'    => 198,
                'title' => 'medication_patient_create',
            ],
            [
                'id'    => 199,
                'title' => 'medication_patient_edit',
            ],
            [
                'id'    => 200,
                'title' => 'medication_patient_show',
            ],
            [
                'id'    => 201,
                'title' => 'medication_patient_delete',
            ],
            [
                'id'    => 202,
                'title' => 'medication_patient_access',
            ],
            [
                'id'    => 203,
                'title' => 'indication_patient_create',
            ],
            [
                'id'    => 204,
                'title' => 'indication_patient_edit',
            ],
            [
                'id'    => 205,
                'title' => 'indication_patient_show',
            ],
            [
                'id'    => 206,
                'title' => 'indication_patient_delete',
            ],
            [
                'id'    => 207,
                'title' => 'indication_patient_access',
            ],
            [
                'id'    => 208,
                'title' => 'default_question_create',
            ],
            [
                'id'    => 209,
                'title' => 'default_question_edit',
            ],
            [
                'id'    => 210,
                'title' => 'default_question_show',
            ],
            [
                'id'    => 211,
                'title' => 'default_question_delete',
            ],
            [
                'id'    => 212,
                'title' => 'default_question_access',
            ],
            [
                'id'    => 213,
                'title' => 'custom_question_create',
            ],
            [
                'id'    => 214,
                'title' => 'custom_question_edit',
            ],
            [
                'id'    => 215,
                'title' => 'custom_question_show',
            ],
            [
                'id'    => 216,
                'title' => 'custom_question_delete',
            ],
            [
                'id'    => 217,
                'title' => 'custom_question_access',
            ],
            [
                'id'    => 218,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 219,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 220,
                'title' => 'system_calendar_access',
            ],
            [
                'id'    => 221,
                'title' => 'answer_patient_create',
            ],
            [
                'id'    => 222,
                'title' => 'answer_patient_edit',
            ],
            [
                'id'    => 223,
                'title' => 'answer_patient_show',
            ],
            [
                'id'    => 224,
                'title' => 'answer_patient_delete',
            ],
            [
                'id'    => 225,
                'title' => 'answer_patient_access',
            ],
            [
                'id'    => 226,
                'title' => 'setting_create',
            ],
            [
                'id'    => 227,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 228,
                'title' => 'setting_show',
            ],
            [
                'id'    => 229,
                'title' => 'setting_delete',
            ],
            [
                'id'    => 230,
                'title' => 'setting_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
