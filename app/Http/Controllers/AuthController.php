<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class AuthController extends Controller
{
    public function login()
    {
        return view('welcome');
    }

    public function postlogin(Request $request)
    {
        $cek = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);

        if(Auth::attempt($cek))
            {
                $user = Auth::user();
                if($user->role == 'admin')
                    {
                        return redirect()->route('admin');
                    }else
                    {
                        return redirect()->route('menu');
                    }
            }
            return back()->with('status', 'Email atau password salah, coba lagi!');
    }

    public function register()
    {
        return view('register');
    }

    public function postregister(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required'
        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=>bcrypt($request->password),
            'role'=> 'customer'
        ]);
        return redirect()->route('login');
    }

    public function menu()
    {
        $produk = produk::all();
        return view('menu', compact('produk'));
    }

    public function admin()
    {
        $produk = produk::all();
        return view('admin', compact('produk'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function tambah()
    {
        $kategori = kategori::all();
        return view('tambah', compact('kategori'));
    }

    public function posttambah(Request $request)
    {
        $request->validate([
            'kategori_id'=> 'required',
            'name'=> 'required',
            'harga'=> 'required|integer',
            'deskripsi'=> 'required',
            'foto'=> 'required|file|image',
            'qty'=> 'required|integer'
        ]);

        Produk::create([
            'kategori_id'=> $request->kategori_id,
            'name'=> $request->name,
            'harga'=> $request->harga,
            'deskripsi'=> $request->deskripsi,
            'foto'=> $request->file('foto')->store('asset', 'public'),
            'qty'=> $request->qty
        ]);

        return redirect()->route('admin');
    }

    public function hapus(produk $produk)
    {
        $produk->delete();
        return redirect()->route('admin');
    }

    public function edit(produk $produk)
    {
        $kategori = kategori::all();
        return view('edit', compact('produk', 'kategori')); 
    }

    public function postedit(Request $request, produk $produk)
    {
        $data = $request->validate([
            'kategori_id'=> 'required',
            'name'=> 'required',
            'harga'=> 'required|integer',
            'deskripsi'=> 'required',
            'foto'=> 'nullable|file|image',
            'qty'=> 'required|integer'
        ]);

        if($request->hasFile('foto'))
            {
                $data['foto'] = $request->foto->store('img', 'public');
            }else
            {
                unset($data['foto']);
            }
            $produk->update($data);

            return redirect()->route('admin');
    }

    public function keranjang()
    {
        return view('keranjang');
    }

    public function detail()
    {
        return view('detail');
    }
}
