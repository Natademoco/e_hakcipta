<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
            'noktp' => ['required', 'numeric', 'digits:16'], // Validasi untuk nomor KTP (16 digit)
            'tanggal_lahir' => ['required', 'date'], // Validasi tanggal lahir
            'alamat' => ['required', 'string', 'max:255'], // Validasi alamat
            'kota' => ['required', 'string', 'max:100'], // Validasi kota
            'provinsi' => ['required', 'string', 'max:100'], // Validasi provinsi
            'kewarganegaraan' => ['required', 'string', 'max:50'], // Validasi kewarganegaraan
            'jenis_kelamin' => ['required', 'in:Laki-laki,Perempuan'], // Validasi jenis kelamin (dropdown)
            'telepon' => ['required', 'numeric', 'digits_between:10,13'], // Validasi nomor telepon
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'noktp' => $data['noktp'], // Simpan nomor KTP
            'tanggal_lahir' => $data['tanggal_lahir'], // Simpan tanggal lahir
            'alamat' => $data['alamat'], // Simpan alamat
            'kota' => $data['kota'], // Simpan kota
            'provinsi' => $data['provinsi'], // Simpan provinsi
            'kewarganegaraan' => $data['kewarganegaraan'], // Simpan kewarganegaraan
            'jenis_kelamin' => $data['jenis_kelamin'], // Simpan jenis kelamin
            'telepon' => $data['telepon'], // Simpan nomor telepon
        ]);
    }
}
