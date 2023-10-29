@extends('template.template-en')

@section('head')
{{-- css --}}
{{-- <link rel="stylesheet" href="{{ asset('css/[name].css') }}?t={{ env('VERSION_TIME') }}"> --}}
@endsection

@section('body')
<x-navbar :page="'project'" :lang="'en'" :enRoute="'aboutEn'" :idRoute="'aboutId'" />

<div class="h-28 sm:h-32 md:h-36 lg:h-40 xl:h-44 2xl:h-48 bg-center bg-cover flex items-center justify-center" style="background-image: url({{asset('assets/header/project-header.jpg')}}?t={{ env('VERSION_TIME') }});">
    <h1 class="font-ttRamillas text-center text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-custom-white">Our Project</h1>
</div>

<div class="c-container text-paragraph py-16 sm:py-24 md:py-32 flex flex-col gap-8">
    <div class="bg-custom-lighter-blue px-6 sm:px-7 md:px-8 pt-4 sm:pt-5 md:pt-6 pb-2 sm:pb-2.5 md:pb-3 relative">
        <h1 class="text-custom-dark-blue font-ttRamillas font-extrabold absolute -top-4 sm:-top-[1.125rem] md:-top-5 text-2xl sm:text-3xl md:text-4xl">Photos</h1>
        <p class="text-custom-dark-blue/90">Beberapa foto dari hasil proyek Automatic Door yang telah kami kerjakan</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-10 md:gap-12 text-center">
        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/1.jpg')}}?t={{ env('VERSION_TIME') }}" alt="Mall E Walk (North Entrance) - Balikpapan" class="w-full">
            <p class="font-bold">Mall E Walk (North Entrance) - Balikpapan</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/2.jpg')}}?t={{ env('VERSION_TIME') }}" alt="Mall E Walk (East Entrance) - Balikpapan" class="w-full">
            <p class="font-bold">Mall E Walk (East Entrance) - Balikpapan</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/3.jpg')}}?t={{ env('VERSION_TIME') }}" alt="Mall Senayan City - Jakarta" class="w-full">
            <p class="font-bold">Mall Senayan City - Jakarta</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/4.jpg')}}?t={{ env('VERSION_TIME') }}" alt="Mall E Walk (North Entrance) - Balikpapan" class="w-full">
            <p class="font-bold">Mall E Walk (North Entrance) - Balikpapan</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/5.jpg')}}?t={{ env('VERSION_TIME') }}" alt="Bandara Soekarno-Hatta - Tangerang" class="w-full">
            <p class="font-bold">Bandara Soekarno-Hatta - Tangerang</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/6.jpg')}}?t={{ env('VERSION_TIME') }}" alt="Bandara Soekarno-Hatta - Tangerang" class="w-full">
            <p class="font-bold">Bandara Soekarno-Hatta - Tangerang</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/7.jpg')}}?t={{ env('VERSION_TIME') }}" alt="Toilet Disabled Bandara Soekarno Hatta - Tangerang" class="w-full">
            <p class="font-bold">Toilet Disabled Bandara Soekarno Hatta - Tangerang</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/8.jpg')}}?t={{ env('VERSION_TIME') }}" alt="Puri Indah Mall - Jakarta" class="w-full">
            <p class="font-bold">Puri Indah Mall - Jakarta</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/9.jpg')}}?t={{ env('VERSION_TIME') }}" alt="Apartment St. Moritz - Jakarta" class="w-full">
            <p class="font-bold">Apartment St. Moritz - Jakarta</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/10.jpg')}}?t={{ env('VERSION_TIME') }}" alt="Office St. Moritz - Jakarta" class="w-full">
            <p class="font-bold">Office St. Moritz - Jakarta</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/11.jpg')}}?t={{ env('VERSION_TIME') }}" alt="Hotel La Lisa - Surabaya" class="w-full">
            <p class="font-bold">Hotel La Lisa - Surabaya</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/12.jpg')}}?t={{ env('VERSION_TIME') }}" alt="Hotel Horison - Kertajati" class="w-full">
            <p class="font-bold">Hotel Horison - Kertajati</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/13.jpg')}}?t={{ env('VERSION_TIME') }}" alt="RSIA Brawijaya - Jakarta" class="w-full">
            <p class="font-bold">RSIA Brawijaya - Jakarta</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/14.jpg')}}?t={{ env('VERSION_TIME') }}" alt="RS Santo Borromeus - Bandung" class="w-full">
            <p class="font-bold">RS Santo Borromeus - Bandung</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/15.jpg')}}?t={{ env('VERSION_TIME') }}" alt="RS Santo Borromeus - Bandung" class="w-full">
            <p class="font-bold">RS Santo Borromeus - Bandung</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Hermetic Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/16.jpg')}}?t={{ env('VERSION_TIME') }}" alt="RS Siloam Mampang - Jakarta" class="w-full">
            <p class="font-bold">RS Siloam Mampang - Jakarta</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/17.jpg')}}?t={{ env('VERSION_TIME') }}" alt="RS Siloam TB Simatupang - Jakarta" class="w-full">
            <p class="font-bold">RS Siloam TB Simatupang - Jakarta</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/18.jpg')}}?t={{ env('VERSION_TIME') }}" alt="RS EMC Pekayon - Bekasi" class="w-full">
            <p class="font-bold">RS EMC Pekayon - Bekasi</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/19.jpg')}}?t={{ env('VERSION_TIME') }}" alt="RS EMC Pekayon - Bekasi" class="w-full">
            <p class="font-bold">RS EMC Pekayon - Bekasi</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Swing Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/20.jpg')}}?t={{ env('VERSION_TIME') }}" alt="RS EMC Pekayon - Bekasi" class="w-full">
            <p class="font-bold">RS EMC Pekayon - Bekasi</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Hermetic Single Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/21.jpg')}}?t={{ env('VERSION_TIME') }}" alt="Gedung Bintang Toedjoe - Bekasi" class="w-full">
            <p class="font-bold">Gedung Bintang Toedjoe - Bekasi</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/22.jpg')}}?t={{ env('VERSION_TIME') }}" alt="MaxxBox Lippo Village - Tangerang" class="w-full">
            <p class="font-bold">MaxxBox Lippo Village - Tangerang</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/23.jpg')}}?t={{ env('VERSION_TIME') }}" alt="Honda Daya Motor - Bandung" class="w-full">
            <p class="font-bold">Honda Daya Motor - Bandung</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/24.jpg')}}?t={{ env('VERSION_TIME') }}" alt="Galaxy Mall - Surabaya" class="w-full">
            <p class="font-bold">Galaxy Mall - Surabaya</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/25.jpg')}}?t={{ env('VERSION_TIME') }}" alt="Apartment Nine Residence - Jakarta" class="w-full">
            <p class="font-bold">Apartment Nine Residence - Jakarta</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Sliding Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/26.jpg')}}?t={{ env('VERSION_TIME') }}" alt="Bank Indonesia - Yogyakarta" class="w-full">
            <p class="font-bold">Bank Indonesia - Yogyakarta</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Swing Door</p>
        </div>

        <div class="flex flex-col gap-3 sm:gap-3.5 md:gap-4 items-center col-span-1">
            <img src="{{asset('assets/project/27.jpg')}}?t={{ env('VERSION_TIME') }}" alt="Bank Indonesia - Bandung" class="w-full">
            <p class="font-bold">Bank Indonesia - Bandung</p>
            <p class="-mt-2 sm:-mt-2.5 md:-mt-3">Double Swing Door</p>
        </div>
    </div>

    <div class="bg-custom-lighter-blue px-6 sm:px-7 md:px-8 pt-4 sm:pt-5 md:pt-6 pb-2 sm:pb-2.5 md:pb-3 relative mt-16">
        <h1 class="text-custom-dark-blue font-ttRamillas font-extrabold absolute -top-4 sm:-top-[1.125rem] md:-top-5 text-2xl sm:text-3xl md:text-4xl">Project Reference</h1>
        <p class="text-custom-dark-blue/90">Daftar pelanggan dan proyek yang telah kami selesaikan</p>
    </div>

    <div class="px-10 sm:px-16 md:px-20 lg:px-24 xl:px-28 2xl:px-32 bg-custom-dark-blue flex flex-col items-center rounded-3xl py-8 text-custom-white gap-6">
        <h1 class="font-ttRamillas font-extrabold text-base sm:text-lg md:text-xl">Downloads</h1>

        <div class="border-b border-b-custom-white flex flex-col gap-4 sm:gap-5 md:gap-6 w-full pb-2 sm:pb-3 md:pb-4 px-4 sm:px-6 md:px-8">
            <div class="w-full flex justify-between items-center gap-6 sm:gap-9 md:gap-12">
                <p>Project Reference List</p>

                <a href="{{asset('assets/brosure/project/REFERENCE PROJECT MANUSA.pdf')}}?t={{ env('VERSION_TIME') }}" download>
                    <svg class="w-4 sm:w-5 md:w-6 mr-1 flex-none" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.25 22H17.75V19.5H0.25V22ZM17.75 8.25H12.75V0.75H5.25V8.25H0.25L9 17L17.75 8.25Z" fill="#F8F4E9" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<x-footer />
@endsection
