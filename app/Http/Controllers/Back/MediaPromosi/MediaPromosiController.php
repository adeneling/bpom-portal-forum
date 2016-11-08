<?php

namespace App\Http\Controllers\Back\MediaPromosi;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\MediaPromosi\MediaPromosi;

use App\Http\Requests\MediaPromosi\MediaPromosiStore;
use App\Http\Requests\MediaPromosi\MediaPromosiUpdate;

use File;
use Storage;

class MediaPromosiController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:web');
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
		$media = MediaPromosi::orderBy('created_at', 'desc')->get();
		return view('pages.backend.media-promosi.index', compact('media'))->withTitle('Kelola Media Promosi');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
		return view('pages.backend.media-promosi.create')->withTitle('Tambah Media Promosi');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(MediaPromosiStore $request)
	{
		//
		$audioMime = array('Faudio/32kadpcm', 'audio/3gpp', 'audio/3gpp2', 'audio/ac3', 'audio/AMR', 'audio/AMR-WB', 'audio/amr-wb+', 'audio/asc', 'audio/basic', 'audio/BV16', 'audio/BV32', 'audio/clearmode', 'audio/CN', 'audio/DAT12', 'audio/dls', 'audio/dsr-es201108', 'audio/dsr-es202050', 'audio/dsr-es202211', 'audio/dsr-es202212', 'audio/DVI4', 'audio/EVRC', 'audio/EVRC-QCP', 'audio/EVRC0', 'audio/EVRC1', 'audio/EVRCB', 'audio/EVRCB0', 'audio/EVRCB1', 'audio/G722', 'audio/G7221', 'audio/G723', 'audio/G726-16', 'audio/G726-24', 'audio/G726-32', 'audio/G726-40', 'audio/G728', 'audio/G729', 'audio/G7291', 'audio/G729D', 'audio/G729E', 'audio/GSM', 'audio/GSM-EFR', 'audio/iLBC', 'audio/L16', 'audio/L20', 'audio/L24', 'audio/L8', 'audio/LPC', 'audio/mobile-xmf', 'audio/mp4', 'audio/MP4A-LATM', 'audio/MPA', 'audio/mpa-robust', 'audio/mpeg', 'audio/mpeg4-generic', 'audio/parityfec', 'audio/PCMA', 'audio/PCMU', 'audio/prs.sid', 'audio/QCELP', 'audio/RED', 'audio/rtp-enc-aescm128', 'audio/rtp-midi', 'audio/rtx', 'audio/SMV', 'audio/SMV-QCP', 'audio/SMV0', 'audio/sp-midi', 'audio/t140c', 'audio/t38', 'audio/telephone-event', 'audio/tone', 'audio/VDVI', 'audio/VMR-WB', 'audio/vnd.3gpp.iufp', 'audio/vnd.4SB', 'audio/vnd.audiokoz', 'audio/vnd.CELP', 'audio/vnd.cisco.nse', 'audio/vnd.cmles.radio-events', 'audio/vnd.cns.anp1', 'audio/vnd.cns.inf1', 'audio/vnd.digital-winds', 'audio/vnd.dlna.adts', 'audio/vnd.dolby.mlp', 'audio/vnd.everad.plj', 'audio/vnd.hns.audio', 'audio/vnd.lucent.voice', 'audio/vnd.nokia.mobile-xmf', 'audio/vnd.nortel.vbk', 'audio/vnd.nuera.ecelp4800', 'audio/vnd.nuera.ecelp7470', 'audio/vnd.nuera.ecelp9600', 'audio/vnd.octel.sbc', 'audio/vnd.rhetorex.32kadpcm', 'audio/vnd.sealedmedia.softseal.mpeg', 'audio/vnd.vmx.cvsd');

		$imageMime = array('image/cgm', 'image/fits', 'image/g3fax', 'image/gif', 'image/ief', 'image/jp2', 'image/jpeg', 'image/jpm', 'image/jpx', 'image/naplps', 'image/png', 'image/prs.btif', 'image/prs.pti', 'image/t38', 'image/tiff', 'image/tiff-fx', 'image/vnd.adobe.photoshop', 'image/vnd.cns.inf2', 'image/vnd.djvu', 'image/vnd.dwg', 'image/vnd.dxf', 'image/vnd.fastbidsheet', 'image/vnd.fpx', 'image/vnd.fst', 'image/vnd.fujixerox.edmics-mmr', 'image/vnd.fujixerox.edmics-rlc', 'image/vnd.globalgraphics.pgb', 'image/vnd.microsoft.icon', 'image/vnd.mix', 'image/vnd.ms-modi', 'image/vnd.net-fpx', 'image/vnd.sealed.png', 'image/vnd.sealedmedia.softseal.gif', 'image/vnd.sealedmedia.softseal.jpg', 'image/vnd.svf', 'image/vnd.wap.wbmp', 'image/vnd.xiff');

		$videoMime = array('video/3gpp', 'video/3gpp-tt', 'video/3gpp2', 'video/BMPEG', 'video/BT656', 'video/CelB', 'video/DV', 'video/H261', 'video/H263', 'video/H263-1998', 'video/H263-2000', 'video/H264', 'video/JPEG', 'video/MJ2', 'video/MP1S', 'video/MP2P', 'video/MP2T', 'video/mp4', 'video/MP4V-ES', 'video/mpeg', 'video/mpeg4-generic', 'video/MPV', 'video/nv', 'video/parityfec', 'video/pointer', 'video/quicktime', 'video/raw', 'video/rtp-enc-aescm128', 'video/rtx', 'video/SMPTE292M', 'video/vc1', 'video/vnd.dlna.mpeg-tts', 'video/vnd.fvt', 'video/vnd.hns.video', 'video/vnd.motorola.video', 'video/vnd.motorola.videop', 'video/vnd.mpegurl', 'video/vnd.nokia.interleaved-multimedia', 'video/vnd.nokia.videovoip', 'video/vnd.objectvideo', 'video/vnd.sealed.mpeg1', 'video/vnd.sealed.mpeg4', 'video/vnd.sealed.swf', 'video/vnd.sealedmedia.softseal.mov', 'video/vnd.vivo');

		Storage::makeDirectory('media');
		$filename = '';
		$type = '';
		$mime = File::mimeType($request->file('file'));

		if(in_array($mime, $imageMime)){
			$type = 'gambar';
		}else if(in_array($mime, $audioMime)){
			$type = 'audio';
		}else{
			$type = 'dokumen';
		}

		if($type == 'audio'){
			Storage::makeDirectory('media/audio');
			$filename = 'media/audio/'.str_random(3).'-'.$request->file('file')->getClientOriginalName();
			Storage::put($filename, file_get_contents($request->file('file')));
		}else if($type == 'gambar'){
			Storage::makeDirectory('media/gambar');
			$filename = 'media/gambar/'.str_random(3).'-'.$request->file('file')->getClientOriginalName();
			Storage::put($filename, file_get_contents($request->file('file')));
		}else if($type == 'dokumen'){
			Storage::makeDirectory('media/dokumen');
			$filename = 'media/dokumen/'.str_random(3).'-'.$request->file('file')->getClientOriginalName();
			Storage::put($filename, file_get_contents($request->file('file')));
		}

		$media = new MediaPromosi;
		$media->user_id = auth('web')->user()->id;
		$media->nama = $request->get('nama');
		$media->lokasi = $filename != '' ? Storage::url($filename) : '';
		$media->deskripsi = $request->get('deskripsi');
		$media->tipe = $type;
		$media->save();

		return redirect()->route('admin.media-promosi.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
		$media = MediaPromosi::find(decrypt($id));
		return view('pages.backend.media-promosi.edit', compact('media'))->withTitle('Ubah Media Promosi');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(MediaPromosiUpdate $request, $id)
	{
		//
		$filename = '';
		$type = '';

		$media = MediaPromosi::find(decrypt($id));
		$media->user_id = auth('web')->user()->id;
		$media->nama = $request->get('nama');

		if($request->hasFile('file')){
			$audioMime = array('Faudio/32kadpcm', 'audio/3gpp', 'audio/3gpp2', 'audio/ac3', 'audio/AMR', 'audio/AMR-WB', 'audio/amr-wb+', 'audio/asc', 'audio/basic', 'audio/BV16', 'audio/BV32', 'audio/clearmode', 'audio/CN', 'audio/DAT12', 'audio/dls', 'audio/dsr-es201108', 'audio/dsr-es202050', 'audio/dsr-es202211', 'audio/dsr-es202212', 'audio/DVI4', 'audio/EVRC', 'audio/EVRC-QCP', 'audio/EVRC0', 'audio/EVRC1', 'audio/EVRCB', 'audio/EVRCB0', 'audio/EVRCB1', 'audio/G722', 'audio/G7221', 'audio/G723', 'audio/G726-16', 'audio/G726-24', 'audio/G726-32', 'audio/G726-40', 'audio/G728', 'audio/G729', 'audio/G7291', 'audio/G729D', 'audio/G729E', 'audio/GSM', 'audio/GSM-EFR', 'audio/iLBC', 'audio/L16', 'audio/L20', 'audio/L24', 'audio/L8', 'audio/LPC', 'audio/mobile-xmf', 'audio/mp4', 'audio/MP4A-LATM', 'audio/MPA', 'audio/mpa-robust', 'audio/mpeg', 'audio/mpeg4-generic', 'audio/parityfec', 'audio/PCMA', 'audio/PCMU', 'audio/prs.sid', 'audio/QCELP', 'audio/RED', 'audio/rtp-enc-aescm128', 'audio/rtp-midi', 'audio/rtx', 'audio/SMV', 'audio/SMV-QCP', 'audio/SMV0', 'audio/sp-midi', 'audio/t140c', 'audio/t38', 'audio/telephone-event', 'audio/tone', 'audio/VDVI', 'audio/VMR-WB', 'audio/vnd.3gpp.iufp', 'audio/vnd.4SB', 'audio/vnd.audiokoz', 'audio/vnd.CELP', 'audio/vnd.cisco.nse', 'audio/vnd.cmles.radio-events', 'audio/vnd.cns.anp1', 'audio/vnd.cns.inf1', 'audio/vnd.digital-winds', 'audio/vnd.dlna.adts', 'audio/vnd.dolby.mlp', 'audio/vnd.everad.plj', 'audio/vnd.hns.audio', 'audio/vnd.lucent.voice', 'audio/vnd.nokia.mobile-xmf', 'audio/vnd.nortel.vbk', 'audio/vnd.nuera.ecelp4800', 'audio/vnd.nuera.ecelp7470', 'audio/vnd.nuera.ecelp9600', 'audio/vnd.octel.sbc', 'audio/vnd.rhetorex.32kadpcm', 'audio/vnd.sealedmedia.softseal.mpeg', 'audio/vnd.vmx.cvsd');

			$imageMime = array('image/cgm', 'image/fits', 'image/g3fax', 'image/gif', 'image/ief', 'image/jp2', 'image/jpeg', 'image/jpm', 'image/jpx', 'image/naplps', 'image/png', 'image/prs.btif', 'image/prs.pti', 'image/t38', 'image/tiff', 'image/tiff-fx', 'image/vnd.adobe.photoshop', 'image/vnd.cns.inf2', 'image/vnd.djvu', 'image/vnd.dwg', 'image/vnd.dxf', 'image/vnd.fastbidsheet', 'image/vnd.fpx', 'image/vnd.fst', 'image/vnd.fujixerox.edmics-mmr', 'image/vnd.fujixerox.edmics-rlc', 'image/vnd.globalgraphics.pgb', 'image/vnd.microsoft.icon', 'image/vnd.mix', 'image/vnd.ms-modi', 'image/vnd.net-fpx', 'image/vnd.sealed.png', 'image/vnd.sealedmedia.softseal.gif', 'image/vnd.sealedmedia.softseal.jpg', 'image/vnd.svf', 'image/vnd.wap.wbmp', 'image/vnd.xiff');

			$videoMime = array('video/3gpp', 'video/3gpp-tt', 'video/3gpp2', 'video/BMPEG', 'video/BT656', 'video/CelB', 'video/DV', 'video/H261', 'video/H263', 'video/H263-1998', 'video/H263-2000', 'video/H264', 'video/JPEG', 'video/MJ2', 'video/MP1S', 'video/MP2P', 'video/MP2T', 'video/mp4', 'video/MP4V-ES', 'video/mpeg', 'video/mpeg4-generic', 'video/MPV', 'video/nv', 'video/parityfec', 'video/pointer', 'video/quicktime', 'video/raw', 'video/rtp-enc-aescm128', 'video/rtx', 'video/SMPTE292M', 'video/vc1', 'video/vnd.dlna.mpeg-tts', 'video/vnd.fvt', 'video/vnd.hns.video', 'video/vnd.motorola.video', 'video/vnd.motorola.videop', 'video/vnd.mpegurl', 'video/vnd.nokia.interleaved-multimedia', 'video/vnd.nokia.videovoip', 'video/vnd.objectvideo', 'video/vnd.sealed.mpeg1', 'video/vnd.sealed.mpeg4', 'video/vnd.sealed.swf', 'video/vnd.sealedmedia.softseal.mov', 'video/vnd.vivo');

			Storage::makeDirectory('media');
			$mime = File::mimeType($request->file('file'));

			if(in_array($mime, $imageMime)){
				$type = 'gambar';
			}else if(in_array($mime, $audioMime)){
				$type = 'audio';
			}else{
				$type = 'dokumen';
			}

			if($type == 'audio'){
				Storage::makeDirectory('media/audio');
				$filename = 'media/audio/'.str_random(3).'-'.$request->file('file')->getClientOriginalName();
				Storage::put($filename, file_get_contents($request->file('file')));
			}else if($type == 'gambar'){
				Storage::makeDirectory('media/gambar');
				$filename = 'media/gambar/'.str_random(3).'-'.$request->file('file')->getClientOriginalName();
				Storage::put($filename, file_get_contents($request->file('file')));
			}else if($type == 'dokumen'){
				Storage::makeDirectory('media/dokumen');
				$filename = 'media/dokumen/'.str_random(3).'-'.$request->file('file')->getClientOriginalName();
				Storage::put($filename, file_get_contents($request->file('file')));
			}
			Storage::delete($media->lokasi);
		}else{
			$filename = str_replace("/storage/", "", $media->lokasi);
		}

		
		$media->lokasi = $filename != '' ? Storage::url($filename) : '';
		$media->deskripsi = $request->get('deskripsi');
		$media->tipe = empty($type) ? $media->tipe : $type;
		$media->update();

		return redirect()->route('admin.media-promosi.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
		$file = MediaPromosi::find(decrypt($id));
		Storage::delete($file->lokasi);
		$file->delete();

		$media = MediaPromosi::all();
		return view('pages.backend.media-promosi._tableMediaPromosi', compact('media'));
	}
}
