<?php

namespace App\Http\Controllers;

use App\Models\Kejadian;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPUnit\Framework\isEmpty;

class KejadianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $kejadian = "";

        $kejadians = Kejadian::all();

        if (isEmpty($kejadians)) {
            $kejadian = Kejadian::all();
        }
        $kejadian = Kejadian::first()->paginate(5); // Menampilkan 5 data dari database
        // $kejadian = Kejadian::all();

        $title = 'Hapus Kejadian!';
        $text = "Apakah Anda yakin ingin menghapusnya?";
        confirmDelete($title, $text);
        return view('client.pages.kejadian', compact('kejadian'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function formKejadian()
    {
        return view('client.pages.form-kejadian');
    }

    public function formstore(Request $request)
    {
        // try {
        Log::info('Request received:', $request->all());

        // Proses validasi
        $request->validate([
            'nama_pelapor' => 'required',
            'email_pelapor' => 'required',
            'jenis_kejadian' => 'required',
            'waktu_kejadian' => 'required|date_format:H:i',
            'tanggal_kejadian' => 'required',
            'kronologi_kejadian' => 'required',
            'img_kejadian' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'status_kejadian' => 'nullable'
        ]);

        // $validator = Validator::make($request->all(), [
        //     'nama_pelapor' => 'required',
        //     'email_pelapor' => 'required',
        //     'jenis_kejadian' => 'required',
        //     'waktu_kejadian' => 'required|date_format:H:i:s.v',
        //     'tanggal_kejadian' => 'required',
        //     'kronologi_kejadian' => 'required',
        //     'img_kejadian' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        //     'status_kejadian' => 'nullable'
        // ]);

        // if ($validator->fails()) {
        //     return back()->with('error', $validator->messages())->withInput();
        // }

        Log::info('Validation passed');

        // Upload Image
        $img_kejadian = $request->file('img_kejadian');
        $hashFile = $img_kejadian->hashName();
        $fileName = time() . '-' . uniqid() . '-' . $hashFile;
        $img_kejadian->move(public_path('upload/kejadian'), $fileName);

        // Proses memasukkan data ke database
        Kejadian::create([
            'nama_pelapor' => $request->nama_pelapor,
            'email_pelapor' => $request->email_pelapor,
            'jenis_kejadian' => $request->jenis_kejadian,
            'waktu_kejadian' => $request->waktu_kejadian,
            'tanggal_kejadian' => $request->tanggal_kejadian,
            'kronologi_kejadian' => $request->kronologi_kejadian,
            'img_kejadian' => $fileName,
            'status_kejadian' => 'Tidak Teratasi'
        ]);

        Log::info('Data saved successfully');

        Alert::toast('Laporan Kejadian Berhasil Dikirim', 'success');
        return redirect()->route('form.index')->with('success', 'Kejadian Berhasil Dikirim');
        // } catch (\Exception $e) {
        //     // Log::error('Error:', ['exception' => $e]);
        //     return back()->withErrors(['error' => $e->getMessage()]);
        // }
    }

    public function create()
    {
        return view('client.pages.kejadian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info('Request received:', $request->all());

        // Proses Validasi
        $request->validate([
            'nama_pelapor' => 'required',
            'email_pelapor' => 'required',
            'jenis_kejadian' => 'required',
            'waktu_kejadian' => 'required|date_format:H:i',
            'tanggal_kejadian' => 'required',
            'kronologi_kejadian' => 'required',
            'img_kejadian' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'status_kejadian' => 'nullable'
        ]);

        Log::info('Validation passed');

        // Upload Image
        $img_kejadian = $request->file('img_kejadian');
        $hashFile = $img_kejadian->hashName();
        $fileName = time() . '-' . uniqid() . '-' . $hashFile;
        $img_kejadian->move(public_path('upload/kejadian'), $fileName);

        // Proses Memasukkan data ke database
        Kejadian::create([
            'nama_pelapor' => $request->nama_pelapor,
            'email_pelapor' => $request->email_pelapor,
            'jenis_kejadian' => $request->jenis_kejadian,
            'waktu_kejadian' => $request->waktu_kejadian,
            'tanggal_kejadian' => $request->tanggal_kejadian,
            'kronologi_kejadian' => $request->kronologi_kejadian,
            'img_kejadian' => $fileName,
            'status_kejadian' => 'Tidak Teratasi'
        ]);

        Log::info('Data saved successfully');

        Alert::toast('Kejadian Berhasil Ditambahkan', 'success');
        return redirect()->route('kejadian.index')->with('success', 'Kejadian Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kejadian = Kejadian::findOrFail($id);

        return view('client.pages.kejadian.show', compact('kejadian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kejadian = Kejadian::findOrFail($id);
        return view('client.pages.kejadian.edit', compact('kejadian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Proses Validasi
        $request->validate([
            'nama_pelapor' => 'required',
            'email_pelapor' => 'required',
            'jenis_kejadian' => 'required',
            'waktu_kejadian' => 'required|date_format:H:i',
            'tanggal_kejadian' => 'required',
            'kronologi_kejadian' => 'required',
            'img_kejadian' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'status_kejadian' => 'nullable'
        ]);

        // Ambil data berdasarkan ID
        $kejadian = Kejadian::findOrFail($id);

        // Memasukkan data ke database
        // Jika foto diganti
        if ($request->hasFile('img_kejadian')) {
            $img_kejadian = $request->file('img_kejadian');
            $hashFile = $img_kejadian->hashName();
            $fileName = time() . '-' . uniqid() . '-' . $hashFile;
            $img_kejadian->move(public_path('upload/kejadian'), $fileName);

            unlink(public_path('upload/kejadian/' . $kejadian->img_kejadian));

            // Update data bersama foto
            $kejadian->update([
                'nama_pelapor' => $request->nama_pelapor,
                'email_pelapor' => $request->email_pelapor,
                'jenis_kejadian' => $request->jenis_kejadian,
                'waktu_kejadian' => $request->waktu_kejadian,
                'tanggal_kejadian' => $request->tanggal_kejadian,
                'kronologi_kejadian' => $request->kronologi_kejadian,
                'img_kejadian' => $fileName,
                'status_kejadian' => $request->status_kejadian
            ]);
        } else {
            // Update tanpa mengubah foto
            $kejadian->update([
                'nama_pelapor' => $request->nama_pelapor,
                'email_pelapor' => $request->email_pelapor,
                'jenis_kejadian' => $request->jenis_kejadian,
                'waktu_kejadian' => $request->waktu_kejadian,
                'tanggal_kejadian' => $request->tanggal_kejadian,
                'kronologi_kejadian' => $request->kronologi_kejadian,
                'status_kejadian' => $request->status_kejadian
            ]);
        }

        Alert::toast('Kejadian Berhasil Diubah', 'success');
        return redirect()->route('kejadian.index')->with('success', 'Kejadian Berhasil Diperbaharui');
    }

    // Update Status Kejadian
    public function udpateStatus(Request $request, string $id)
    {
        $request->validate([
            'status_kejadian' => 'nullable'
        ]);

        $statusKejadian = Kejadian::findOrFail($id);

        $statusKejadian->update([
            'status_kejadian' => 'Teratasi'
        ]);

        // DB::table('kejadians')->where('id', $id)->update([
        //     'status_kejadian' => 'Teratasi'
        // ]);

        Alert::toast('Status Berhasil Diubah', 'success');
        return redirect()->route('kejadian.show', $statusKejadian->id)->with('success', 'Status Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Ambil data berdasarkan ID
        $kejadian = Kejadian::findOrFail($id);

        // Hapus data foto
        // Storage::delete(public_path('upload/kejadian/' . $kejadian->img_kejadian));
        unlink(public_path('upload/kejadian/' . $kejadian->img_kejadian));

        // Menghapus Data dari database
        $kejadian->delete();

        Alert::alert('Sukses', 'Kejadian Berhasil Dihapus', 'success');
        return redirect()->route('kejadian.index')->with('success', 'Kejadian Berhasil Dihapus');
    }
}
