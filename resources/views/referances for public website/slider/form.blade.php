


<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}
        <title>Laravel</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
                <h1>Add slider</h1>
                <hr>
                {{ _('Locale') }}
            
                    {{-- @foreach (config('localization.locales') as $locale)
                        <x-dropdown-link :href="route('localization',$locale)">
                            {{ __($locale) }}
                        </x-dropdown-link>
                    @endforeach --}}

                    <div class="dropdown">
                        <x-dropdown-button>
                            Languages
                        </x-dropdown-button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach (config('localization.locales') as $locale)
                                <a class="dropdown-item" href="{{ route('localization',$locale) }}">{{ __($locale) }}</a>
                            @endforeach        
                        </div>
                    </div>

                
                <br>
                <br>
                <br>
            
                <form action="{{ Route('slider.insert') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="photo">
                    <br>
                    <hr>
                    @if(get_Languages())
                        @foreach (get_Languages() as $key => $item)
                        <h2> {{ __('messages.'.$item->abbr) }} </h2>
                        <hr>
                            translation_lang : <input type="text" value="{{ $item->name }}" name="slider[{{ $key }}][translation_lang]">
                            <br>
                            translation_of : <input type="text" value="{{ $item->abbr }}" name="slider[{{ $key }}][abbr]">
                            <br>
                            title : <input type="text" name="slider[{{ $key }}][title]">
                            <br>
                            desc : <input type="text" name="slider[{{ $key }}][desc]">
                            <br>
                            <hr>
                        @endforeach
                    @endif
                     
                    <input type="submit" value="save">
                </form>
                
            </div>
        </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
        <script>"https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"</script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> --}}
    </body>
</html>
