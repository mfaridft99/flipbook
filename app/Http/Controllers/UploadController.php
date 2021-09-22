<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\daftarbuku;

use Illuminate\Support\Facades\File;

class UploadController extends Controller
{
	public function mainmenu(){
		// menampilkan menu utama
		$daftarbuku = daftarbuku::paginate(16);
		return view('halamanutama', compact('daftarbuku'));
	}
	public function upload(){
		// menampilkan halaman upload
		return view('upload');
	}
	public function flipbook($id){
		// menampilkan halaman flipbook
		$daftarbuku = daftarbuku::find($id);
		return view('flipbook', compact('daftarbuku'));
	}
	public function proses_upload(Request $request){
		$this->validate($request, [
			'judul' => 'required',
			'keterangan' => 'required',
			'file' => 'required|file|mimes:pdf',
			'gambar'=> 'required|file|image|mimes:jpg,png,jpeg'
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
		$nama_file = time()."_".$file->getClientOriginalName();
		$gambar = $request->file('gambar');
		$nama_gambar = time()."_".$gambar->getClientOriginalName();

      	 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_uploadF = 'Storage';
		$tujuan_uploadI = 'Storage/image';

                // upload file
		$file->move($tujuan_uploadF,$nama_file);
		$gambar->move($tujuan_uploadI,$nama_gambar);

		daftarbuku::create([
			'judul' => $request->judul,
			'keterangan' => $request->keterangan,
			'file' => $nama_file,
			'gambar' => $nama_gambar
		]);
		
		return redirect('/')->with('success', 'Form telah berhasil diunggah!');
		
	}
	public function hapus($id){
		// hapus file
		$daftarbuku = daftarbuku::where('id',$id)->first();
		File::delete('Storage/'.$daftarbuku->file);
	
		// hapus data
		daftarbuku::where('id',$id)->delete();
	
		return redirect()->back()->with('success', 'Data telah behasil dihapus!');
	}
	public function download($file){
		// mendownload file
		return response()->download('storage/'.$file);
	}

	public function search(Request $request){
		//mencari data
		$search = $request->get('search');
		$daftarbuku = daftarbuku::where('judul','LIKE','%'.$search.'%')->orWhere('keterangan','LIKE','%'.$search.'%')->paginate(16);
		
		// menampilkan hasil pencarian
		return view('halamanutama', compact('daftarbuku'));
	}

	public function edit($id){
		// mengambil data berdasarkan id yang dipilih
		$daftarbuku = daftarbuku::where('id',$id)->get();
		// passing data yang didapat ke view edit.blade.php
		return view('edit',['daftarbuku' => $daftarbuku]);
	}

	public function update(Request $request, $id){
		
		$this->validate($request, [
			'file' => 'file|mimes:pdf',
			'gambar'=> 'file|image|mimes:jpg,png,jpeg'
		]);

		$daftarbuku = daftarbuku::find($id);

		$daftarbuku->judul = $request->input('judul');
		$daftarbuku->keterangan = $request->input('keterangan');
		
		// menyimpan data file yang diupload ke variabel $file
		if ($request->hasfile('file')){
			$destination1 = 'Storage/'.$daftarbuku->file;
			if (File::exists($destination1)){
				File::delete($destination1);
			}
			$file = $request->file('file');
			$nama_file = time()."_".$file->getClientOriginalName();
			$tujuan_uploadF = 'Storage';
			$file->move($tujuan_uploadF,$nama_file);
			$daftarbuku->file = $nama_file;
		}
		
		if ($request->hasfile('gambar')){
			$destination2 = 'Storage/image/'.$daftarbuku->gambar;
			if (File::exists($destination2)){
				File::delete($destination2);
			}
			$gambar = $request->file('gambar');
			$nama_gambar = time()."_".$gambar->getClientOriginalName();
			$tujuan_uploadI = 'Storage/image';
			$gambar->move($tujuan_uploadI,$nama_gambar);
			$daftarbuku->gambar = $nama_gambar;
		}

		$daftarbuku-> update();

		return redirect('/')->with('success', 'Telah Berhasil Update!');
		
	}
}