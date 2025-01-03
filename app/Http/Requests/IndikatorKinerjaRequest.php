<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndikatorKinerjaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id', // Validasi jika user ada di database
            'skp_id' => 'required|exists:skps,id',
            'aspek' => 'required|string|max:255', // Aspek harus ada dan berupa string
            'indikator_kinerja' => 'required|string|max:255', // Indikator kinerja harus ada dan berupa string
            'tipe_target' => 'required|string|max:50', // Tipe target harus ada dan berupa string
            'target_minimum' => 'required|numeric|min:0', // Target minimum harus berupa angka dan lebih besar atau sama dengan 0
            'target_maksimum' => 'required|numeric|min:0', // Target maksimum harus berupa angka dan lebih besar atau sama dengan 0
            'satuan' => 'required|string|max:50', // Satuan harus ada dan berupa string
            'report' => 'nullable|string|max:255', // Report bersifat opsional, jika ada harus berupa string
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'user_id.required' => 'User ID wajib diisi.',
            'user_id.exists' => 'User tidak ditemukan.',
            'skp_id.required' => 'SKP tidak ditemukan.',
            'aspek.required' => 'Aspek wajib diisi.',
            'indikator_kinerja.required' => 'Indikator Kinerja wajib diisi.',
            'tipe_target.required' => 'Tipe Target wajib diisi.',
            'target_minimum.required' => 'Target Minimum wajib diisi.',
            'target_minimum.numeric' => 'Target Minimum harus berupa angka.',
            'target_minimum.min' => 'Target Minimum tidak boleh kurang dari 0.',
            'target_maksimum.required' => 'Target Maksimum wajib diisi.',
            'target_maksimum.numeric' => 'Target Maksimum harus berupa angka.',
            'target_maksimum.min' => 'Target Maksimum tidak boleh kurang dari 0.',
            'satuan.required' => 'Satuan wajib diisi.',
            'report.string' => 'Report harus Yang di pilih pada dropdown.',
        ];
    }
}