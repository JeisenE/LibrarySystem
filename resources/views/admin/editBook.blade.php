@extends('layouts.app')

@section('content')
    <h1 class="text-4xl md:text-5xl font-bold mb-2">{{__('admin.edit_book')}}</h1>
    <div class="w-full h-px bg-gray-700 my-6"></div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        
        <div class="lg:sticky lg:top-6 h-fit">
            <h2 class="text-3xl md:text-4xl font-bold mb-2">{{__('admin.curr_book')}}</h2>
            <div class="w-full h-px bg-white my-6"></div>
            
            <div class="flex flex-col sm:flex-row gap-6">
                <div class="w-full sm:w-1/2 max-w-[220px] mx-auto sm:mx-0">
                    <div class="relative aspect-[2/3] overflow-hidden rounded-lg bg-gray-700">
                        <img id="display-image" img src="{{ $book->image ? asset($book->image) : 'https://placehold.co/200x300' }}" alt="{{ $book->title }}" class="object-cover w-full h-full">
                    </div>
                </div>
                <div class="flex flex-col">
                    <h3 id="display-title" class="text-2xl sm:text-3xl font-bold mb-4">{{ $book->title }}</h3>
                    
                    <h3 class="text-lg sm:text-2xl font-bold mb-6">{{ __('admin.by') }} <span id="display-author">{{ $book->authors->first()?->name ?? 'Unknown' }}</span></h3>
                    
                    <h3 class="text-2xl font-bold mb-2">{{ __('admin.genre') }}</h3>
                    <div id="display-genre-container" class="flex flex-wrap gap-x-4 gap-y-1">
                        @foreach($book->categories as $category)
                            @php
                            $genreSlug = Str::slug($category->name);
                            $translationKey = 'genre.' . $genreSlug;
                            @endphp

                            <span>
                                @if(Lang::has($translationKey))
                                    {{ __($translationKey) }}
                                @else
                                    {{ $category->name }}
                                @endif
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col gap-6 mt-6">
                <div>
                    <h3 class="text-2xl font-bold mt-2">{{__('admin.id_desc')}}</h3>
                    <p id="display-description-id" class="text-md text-gray-300">{{ $book->description_id}}</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mt-2">{{__('admin.en_desc')}}</h3>
                    <p id="display-description-en" class="text-md text-gray-300">{{ $book->description_en}}</p>
                </div>

                <div class="flex flex-row gap-12">
                    <div>
                        <h3 class="text-2xl font-bold">{{__('admin.publisher')}}</h3>
                        <p id="display-publisher" class="text-md">{{ $book->publisher }}</p>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold">{{__('admin.publish_year')}}</h3>
                        <p id="display-year" class="text-md">{{ $book->publish_year }}</p> 
                    </div>
                </div>
            </div>
        </div>

        <div>
            <h2 class="text-3xl md:text-4xl font-bold mb-2">{{__('admin.update_book')}}</h2>
            <div class="w-full h-px bg-white my-6"></div>
            
            <form action="{{ route('update-book', $book->id) }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-6">
                @csrf
                @method('PUT') <div>
                    <label class="block font-semibold">{{ __('admin.book_title') }}</label>
                    <input type="text" id="input-title" name="title" value="{{ old('title', $book->title) }}" 
                           class="mt-3 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300 w-full" required>
                </div>

                <div>
                    <label class="block font-semibold">{{__('admin.id_desc')}}</label>
                    <textarea id="input-description-id" name="description_id" rows="3" 
                              class="mt-3 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300 w-full" required>{{ old('description_id', $book->description_id) }}</textarea>
                </div>
                 <div>
                    <label class="block font-semibold">{{__('admin.en_desc')}}</label>
                    <textarea id="input-description2-en" name="description_en" rows="3" 
                              class="mt-3 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300 w-full" required>{{ old('description_en', $book->description_en) }}</textarea>
                </div>
                

                <div>
                    <label class="block font-semibold">{{__('admin.publish_year')}}</label>
                    <input type="number" id="input-year" name="publish_year" value="{{ old('publish_year', $book->publish_year) }}"
                           class="mt-3 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300 w-full" required>
                </div>

                <div>
                    <label class="block font-semibold">{{__('admin.publisher')}}</label>
                    <input type="text" id="input-publisher" name="publisher" value="{{ old('publisher', $book->publisher) }}"
                           class="mt-3 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300 w-full" required>
                </div>

                <div>
                    <label class="block font-semibold">{{ __('admin.author') }}</label>
                    <input list="authors" id="input-author" name="author_name" value="{{ old('author_name', $book->authors->first()?->name) }}"
                           class="mt-3 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300 w-full" required>
                    <datalist id="authors">
                        @foreach ($authors as $author)
                            <option value="{{ $author->name }}"></option>
                        @endforeach
                    </datalist>
                </div>

                <div>
                    <label class="block font-semibold">{{ __('admin.genre') }}</label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 p-3 bg-slate-800 border border-slate-700 rounded-xl mt-3">
                        @foreach ($categories as $category)
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" name="category_ids[]" value="{{ $category->id }}" 
                                   class="peer hidden genre-checkbox" 
                                   data-name="{{ $category->name }}"
                                   {{ $book->categories->contains($category->id) ? 'checked' : '' }}>

                            <div class="w-5 h-5 rounded border border-slate-500 flex items-center justify-center group-hover:border-orange-400 peer-checked:bg-orange-400 peer-checked:border-orange-400 peer-checked:[&>svg]:opacity-100 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class=" w-4 h-4 text-black opacity-0 transition">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </div>
                            @php
                                $genreSlug = Str::slug($category->name);
                                $translationKey = 'genre.' . $genreSlug;
                            @endphp

                            <span>
                                @if(Lang::has($translationKey))
                                    {{ __($translationKey) }}
                                @else
                                    {{ $category->name }}
                                @endif
                            </span>
                        </label>
                        @endforeach
                    </div>
                </div>

                <button type="submit" class="bg-[#EAD4AA] text-black font-bold py-3 rounded flex justify-center space-x-2 hover:bg-[#dcc08e] transition">
                    <span>{{ __('admin.butt_update') }}</span>
                </button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 1. Update Teks (Title, Description, dll)
            const mappings = [
                { input: 'input-title', display: 'display-title', default: 'Book Title' },
                { input: 'input-description-id', display: 'display-description-id', default: 'Description...' },
                {input: 'input-description-en', display: 'display-description-en', default: 'Description...' },
                { input: 'input-publisher', display: 'display-publisher', default: '-' },
                { input: 'input-year', display: 'display-year', default: '-' },
                { input: 'input-author', display: 'display-author', default: 'Unknown' },
            ];

            mappings.forEach(map => {
                const inputEl = document.getElementById(map.input);
                const displayEl = document.getElementById(map.display);
                
                if(inputEl && displayEl) {
                    inputEl.addEventListener('input', function() {
                        displayEl.textContent = this.value || map.default;
                    });
                }
            });


            //Update Genre (Checkbox)
            const checkboxes = document.querySelectorAll('.genre-checkbox');
            const genreContainer = document.getElementById('display-genre-container');

            function updateGenres() {
                // Kosongkan container dulu
                genreContainer.innerHTML = '';
                
                // Cari semua checkbox yang dicentang
                const checkedBoxes = document.querySelectorAll('.genre-checkbox:checked');
                
                if (checkedBoxes.length === 0) {
                    genreContainer.innerHTML = '<span class="text-gray-500 italic">No genre selected</span>';
                    return;
                }

                // Loop dan tambahkan ke tampilan kiri
                checkedBoxes.forEach(box => {
                    const genreName = box.getAttribute('data-name');
                    const span = document.createElement('span');
                    span.className = 'text-gray-300';
                    span.innerHTML = '&bull; ' + genreName;
                    genreContainer.appendChild(span);
                });
            }

            // Pasang event listener ke semua checkbox
            checkboxes.forEach(box => {
                box.addEventListener('change', updateGenres);
            });
        });
    </script>
@endsection