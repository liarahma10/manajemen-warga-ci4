<?php

namespace App\Controllers;

use App\Models\WargaModel;

class Warga extends BaseController
{
    protected $wargaModel;

    public function __construct()
    {
        $this->wargaModel = new WargaModel();
    }

    public function index()
    {
        $data['warga'] = $this->wargaModel->findAll();
        return view('warga/index', $data);
    }

    public function create()
    {
        return view('warga/create');
    }

    public function store()
    {
        $this->wargaModel->save([
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'umur' => $this->request->getPost('umur')
        ]);
        return redirect()->to('/warga');
    }

    public function edit($id)
    {
        $data['warga'] = $this->wargaModel->find($id);
        return view('warga/edit', $data);
    }

    public function update($id)
    {
        $this->wargaModel->update($id, [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'umur' => $this->request->getPost('umur')
        ]);
        return redirect()->to('/warga');
    }

    public function delete($id)
    {
        $this->wargaModel->delete($id);
        return redirect()->to('/warga');
    }
}
