<x-layout>
    <h1>
        Create new employer here!
    </h1>

    <div>
        <form action="/employer/create" method="POST">
            @csrf
            <div>
                <label for="first_name">Employer first name</label>
                <div>
                    <input type="text" name="first_name">
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
                    <input type="text" name="last_name">
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
                            <option value="{{ $company->id }}">
                                {{ $company->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <label for="email">Employer email</label>
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
                <label for="phone">Company phone number</label>
                <div>
                    <input type="text" name="phone">
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
