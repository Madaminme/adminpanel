<x-layout>
    <div class="table">
        <div>
            <h1>Companies</h1>
        </div>

        <div>
            <button><a href="/company/create">Create new company</a></button>
        </div>
        <div style="margin-top: 15px;">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Logo</th>
                        <th>Website</th>
                        <th>Other options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->address }}</td>
                            <td>{{ $company->email }}</td>
                            <td> <img src="{{ asset('storage/' . $company->thumbnail) }}" alt="" width="100"
                                    height="100"></td>
                            <td>{{ $company->website }}</td>
                            <td>
                                <button><a href="/company/{{ $company->id }}/edit">Update</a></button>
                                <form action="/company/{{ $company->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button>Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $companies->links() }}
    </div>
</x-layout>
