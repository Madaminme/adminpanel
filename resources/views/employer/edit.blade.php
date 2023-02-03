<x-layout>
    <h1>
        Update new employer here!
    </h1>

    <div>
        <form action="/employer/{{ $employer->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div>
                <label for="first_name">Employer first name</label>
                <div>
                    <input type="text" name="first_name" value="{{ $employer->first_name }}">
                </div>
                @error('first_name')
                    <div role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="last_name">Employer last name</label>
                <div>
                    <input type="text" name="last_name" value="{{ $employer->last_name }}">
                </div>
                @error('last_name')
                    <div role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="company_id">Employer's company </label>
                <div>
                    <select name="company_id" id="company_id" required>
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}"
                                {{ old('company_id', $employer->company_id) == $employer->company_id ? 'selected' : '' }}>
                                <!--old value for option not working-->
                                {{ $company->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <label for="email">Employer email</label>
                <div>
                    <input type="email" name="email" value="{{ $employer->email }}">
                </div>
                @error('email')
                    <div role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="phone">Company phone number</label>
                <div>
                    <input type="text" name="phone" value="{{ $employer->phone }}">
                </div>
                @error('phone')
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
            <a href="/employer">Back to home</a>
        </button>
    </div>
</x-layout>
