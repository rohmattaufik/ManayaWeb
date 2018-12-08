<?php

namespace App\Http\Controllers;

use App\Model\Diskon;
use App\Model\DiskonFor;
use App\Model\Wisata;
use App\Model\DiskonMapping;
use App\Model\Wisatawan;
use App\Model\KategoriWisatawan;
use Illuminate\Http\Request;

class DiskonController extends Controller
{

    # get all diskon
    public function index()
    {
        $diskons    = Diskon::with('diskonFors')->with('diskonMappings')->get();
        $wisatas    = Wisata::all();
        $wisatawans = Wisatawan::all();
        $kategori_wisatawans = KategoriWisatawan::all();

        # wisata, wisatawan by id
        $wisata_by_ids = array();
        $wisatawan_by_ids = array();
        $kategori_wisatawan_ids = array();
        foreach ($wisatas as $wisata)
            $wisata_by_ids[$wisata['id']] = $wisata;
        foreach ($wisatawans as $wisatawan)
            $wisatawan_by_ids[$wisatawan['id']] = $wisatawan;
        foreach ($kategori_wisatawans as $kategori_wisatawan)
            $kategori_wisatawan_ids[$kategori_wisatawan['id']] = $kategori_wisatawan;
        
        # mapping diskon
        foreach ($diskons as $diskon)
        {
            foreach ($diskon['diskonFors'] as $diskonFor)
            {
                if ($diskonFor['for_type'] == 1)
                    $diskonFor['data_type'] = $wisatawan_by_ids[$diskonFor['for_id']];
                if ($diskonFor['for_type'] == 2)
                    $diskonFor['data_type'] = $kategori_wisatawan_ids[$diskonFor['for_id']];
            }

            foreach ($diskon['diskonMappings'] as $mapping)
                $mapping['wisata'] = $wisata_by_ids[$mapping['wisata_id']];
        }
        // dd($diskons);
        return view('admin.diskon.index')->with('diskons', $diskons);
    }

    # create diskon
    public function create()
    {
        return view('admin.diskon.create');
    }

    # store diskon to database
    public function store(Request $request)
    {
        Diskon::create([
            'nama_diskon'   => $request->nama_diskon,
            'jumlah_persen' => $request->jumlah_persen,
            'flag_active'   => 0
        ]);
        return redirect()->route('diskon');
    }

    # create diskon mapping
    public function mapping()
    {
        $diskons    = Diskon::with('diskonMappings')->get();
        $wisatas    = Wisata::all();
        $wisatawans = Wisatawan::all();
        $kategori_wisatawans = KategoriWisatawan::all();

        return view('admin.diskon.mapping')->with('diskons', $diskons)
                    ->with('wisatas', $wisatas)
                    ->with('wisatawans',$wisatawans)
                    ->with('kategori_wisatawans', $kategori_wisatawans);
    }

    # create diskon mapping submit
    public function mapping_submit(Request $request)
    {
        foreach ($request->wisata_id as $wisata_id)
        {
            DiskonMapping::create([
                'diskon_id' => $request->diskon_id,
                'wisata_id' => $wisata_id
            ]);
        }
        return redirect()->route('diskon');
    }

    # create diskon mapping
    public function mapping_for()
    {
        $diskons    = Diskon::with('diskonMappings')->get();
        $wisatas    = Wisata::all();
        $wisatawans = Wisatawan::all();
        $kategori_wisatawans = KategoriWisatawan::all();

        return view('admin.diskon.mappingfor')->with('diskons', $diskons)
                    ->with('wisatas', $wisatas)
                    ->with('wisatawans',$wisatawans)
                    ->with('kategori_wisatawans', $kategori_wisatawans);
    }

    # create diskon mapping submit
    public function mapping_for_submit(Request $request)
    {
        foreach ($request->for_id as $for_id)
        {
            if (!empty($for_id))
            {
                DiskonFor::create([
                    'diskon_id' => $request->diskon_id,
                    'for_type'  => $request->for_type,
                    'for_id'    => $for_id
                ]);
            }
        }
        return redirect()->route('diskon');
    }

    # edit diskon
    public function edit( $id )
    {
        $diskon     = Diskon::find($id);
        if($diskon == null)
        {
            return view("error");
        }
        return view("")->with("diskon", $diskon);
    }

    # update diskon to database
    public function update($id, Request $request)
    {
        Diskon::whereId($id)->update($request->all());
        return redirect();
    }

    # activate diskon
    public function activate($id)
    {
        Diskon::whereId($id)->update(['flag_active' => 1]);
        return redirect()->back();
    }
    
    # deactivate diskon
    public function deactive($id)
    {
        Diskon::whereId($id)->update(['flag_active' => 0]);
        return redirect()->back();
    }

    # store diskon for
    public function storeDiskonFor(Request $request)
    {
        for($ii=0; $ii < count($request) ; $ii++)
        {
            DiskonFor::create([
                "diskon_id"     => $request->diskon_id[$ii],
                "for_type"      => $request->for_type[$ii],
                "for_id"        => $request->for_id[$ii]
            ]);
        }
        return redirect();
    }

    # update diskon for
    public function updateDiskonFor(Request $request)
    {
        DiskonFor::where('diskon_id', $request->diskon_id[0])->delete();
        $this->storeDiskonFor($request);
        return redirect();
    }

}
