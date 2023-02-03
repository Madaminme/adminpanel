<x-layout>
    <div class="table">
        <div>
            <h1>Employers</h1>
        </div>

        <div>
            <button><a href="/employer/create">Create new employer</a></button>
        </div>
        <div style="margin-top: 15px;">
            <table>
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Company</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Other options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employers as $employer)
                        <tr>
                            <td>{{ $employer->first_name }}</td>
                            <td>{{ $employer->last_name }}</td>
                            <td>{{ $employer->company->name }}</td>
                            <td>{{ $employer->email }}</td>
                            <td>{{ $employer->phone }}</td>
                            <td>
                                <button><a href="/employer/{{ $employer->id }}/edit">Update</a></button>
                                <form action="/employer/{{ $employer->id }}" method="POST">
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
        {{ $employers->links() }}
    </div>
</x-layout>
