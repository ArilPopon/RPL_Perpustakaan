<?php

namespace App\Livewire;

use App\Models\Pengembalian;
use App\Models\Pinjam;
use DateTime;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class KembaliComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';
    public $id, $judul, $member, $tgl_kembali, $lama, $status;

    public function render()
    {
        $layout['title'] = 'Pengembalian Buku';
        $data['pinjam'] = Pinjam::where('status', 'pinjam')->paginate(10);
        $data['pengembalian'] = Pengembalian::paginate(10);
        return view('livewire.kembali-component', $data)->layoutData($layout);
    }

    public function pilih($id)
    {
        $pinjam = Pinjam::find($id);
        $this->judul = $pinjam->buku->judul;
        $this->member = $pinjam->user->nama;
        $this->tgl_kembali = $pinjam->tgl_kembali;
        $this->id = $pinjam->id;
        $kembali = new DateTime($pinjam->tgl_kembali);
        $today = new DateTime();
        $selisih = $today->diff($kembali);
        $hariTerlambat = $today > $kembali ? $kembali->diff($today)->days : 0;
        $this->status = $hariTerlambat > 0;
        $this->lama = $hariTerlambat;
    }
    public function store()
    {
        if ($this->status == true) {
            $denda = $this->lama * 1000;
        } else {
            $denda = 0;
        }
        $pinjam = Pinjam::find($this->id);
        Pengembalian::create([
            'pinjam_id' => $this->id,
            'tgl_kembali' => date('Y-m-d'),
            'denda' => $denda,
        ]);
        $pinjam->update([
            'status' => 'kembali'
        ]);
        $this->reset();
        session()->flash('success', 'Berhasil Proses Data!');
        return redirect()->route('kembali');
    }
}
