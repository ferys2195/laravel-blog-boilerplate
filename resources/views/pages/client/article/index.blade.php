@extends('layouts.client.client-layout')
@section('content')
    <div class="p-10">
        <h1 class="text-3xl font-bold text-center">Explore Article</h1>
    </div>
    <div class="flex flex-col lg:flex-row gap-10 justify-between relative -z-20">
        <div class="flex-1 w-full lg:w-2/3">
            <div class="grid lg:grid-cols-2 gap-3">
                @for ($i = 0; $i < 10; $i++)
                    <div class="bg-base-100 p-5">
                        <figure class="mb-5">
                            <img src="https://loremflickr.com/320/240?random={{ $i }}" alt="imagew"
                                class="rounded-3xl">
                        </figure>
                        <div>
                            <div class="badge badge-primary mb-2">Technology</div>
                            <h1 class="text-xl font-semibold mb-2 hover:text-opacity-20">Bagaimana membuat component di
                                Laravel
                            </h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic totam iste inventore dolore
                                eaque
                                nam
                                cum tempora accusamus! Dolorum pariatur veniam sit illo ipsam autem repudiandae doloribus
                                labore,
                                sint nam?</p>
                            <span class="text-sm">Fery Irawan</span>
                        </div>
                    </div>
                @endfor

            </div>
        </div>
        <div class=" w-full lg:w-1/3">
            <div class="sticky top-24">
                <div class="mb-10">
                    <h1 class="text-xl font-semibold mb-5">Categories</h1>
                    <div>
                        <div class="badge">default</div>
                        <div class="badge badge-neutral">neutral</div>
                        <div class="badge badge-primary">primary</div>
                        <div class="badge badge-secondary">secondary</div>
                        <div class="badge badge-accent">accent</div>
                        <div class="badge badge-ghost">ghost</div>
                    </div>
                </div>
                <div>
                    <h1 class="text-xl font-semibold mb-5">Most Popular</h1>
                    @for ($i = 0; $i < 5; $i++)
                        <div class="py-5 bg-base-100">
                            <div class="flex gap-x-5 items-center">
                                <figure class="w-52">
                                    <img src="https://loremflickr.com/320/240?random={{ $i }}"
                                        class="rounded-3xl object-contain" alt="Movie" />
                                </figure>
                                <div class="w-full">
                                    <div class="badge badge-primary">primary</div>
                                    <h2 class="font-semibold lg:text-lg">Bagaimana membuat component di Laravel</h2>
                                </div>

                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
