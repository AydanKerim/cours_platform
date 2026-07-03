@extends('layouts.frontend')

@section('content')
<div id="contents" style="background-color: #f8f9fa; padding: 60px 0; min-height: 80vh;">
    <div class="featured" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        
        <h2 style="text-align: center; color: #2c3e50; font-size: 32px; font-weight: 700; margin-bottom: 50px; text-transform: uppercase; letter-spacing: 1px;">
            Akademik Partnyorlarımız
        </h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 30px;">
            
            @foreach($partners as $partner)
                <div style="background: #ffffff; border-radius: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.04); border: 1px solid #eef2f5; padding: 25px; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; min-height: 220px; box-sizing: border-box;">
                    
                    <div style="width: 100%; height: 110px; display: flex; justify-content: center; align-items: center; margin-bottom: 15px; overflow: hidden;">
                        @if($partner->logo)
                            <img src="{{ asset('storage/'.$partner->logo) }}" 
                                 alt="{{ $partner->name }}" 
                                 style="max-width: 100%; max-height: 100%; object-fit: contain;">
                        @else
                            <div style="color: #bbb; font-size: 14px;">Loqo yoxdur</div>
                        @endif
                    </div>

                    <p style="margin: 10px 0 0 0; font-size: 16px; color: #2c3e50; font-weight: 600; line-height: 1.4;">
                        {{ $partner->name }}
                    </p>

                </div>
            @endforeach

        </div>

    </div>
</div>
@endsection