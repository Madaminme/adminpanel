<x-layout>
    <h1>
        Create new company here!
    </h1>

    <div>
        <form action="/company/{{ $company->id }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div>
                <label for="name">Company name</label>
                <div>
                    <input type="text" name="name" value="{{ $company->name }}">
                </div>
                @error('name')
                    <div role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="address">Company address</label>
                <div>
                    <input type="text" name="address" value="{{ $company->address }}">
                </div>
                @error('address')
                    <div role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="email">Company email</label>
                <div>
                    <input type="email" name="email" value="{{ old('thumbnail', $company->email) }}">
                </div>
                @error('email')
                    <div role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="thumbnail">Upload image</label>
                <div>
                    <input type="file" required name="thumbnail" value="{{ $company->thumbnail }}">
                </div>
                <div>
                    <img src="{{ asset('storage/' . $company->thumbnail) }}" alt="" width="100">
                </div>
                @error('thumbnail')
                    <div role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="website">Company website</label>
                <div>
                    <input type="text" name="website" value="{{ $company->website }}">
                </div>
                @error('website')
                    <div role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit">
                Update
            </button>
        </form>
        <button>
            <a href="/company">Back to home</a>
        </button>
    </div>
</x-layout>
