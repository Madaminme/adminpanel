<x-layout>
    <h1>
        Create new company here!
    </h1>

    <div>
        <form action="/company/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="name">Company name</label>
                <div>
                    <input type="text" name="name">
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
                    <input type="text" name="address">
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
                    <input type="email" name="email">
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
                    <input type="file" required name="thumbnail">
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
                    <input type="text" name="website">
                </div>
                @error('website')
                    <div role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit">
                Submit
            </button>
        </form>
        <button>
            <a href="/company">Back to home</a>
        </button>
    </div>
</x-layout>
