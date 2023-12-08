@extends('layout.base')
@section('content')
    <div class="card">
        <div class="card-body">
            <br>
            <h5 class="card-title">Student Details</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SrNo</th>
                        <th scope="col">Name</th>
                        <th scope="col">PRN Number</th>
                        <th scope="col">Depart</th>
                        <th scope="col">Class</th>
                        <th scope="col">Div </th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php $serialNumber = 1 @endphp
                    @foreach ($students as $item)
                        <tr>
                            <td>{{ $serialNumber }}</td>
                            <td>{{ $item->sname }}</td>
                            <td>{{ $item->sprn }}</td>
                            <td>{{ $item->sdepart }}</td>
                            <td>{{ $item->sclass }}</td>
                            <td>{{ $item->sdiv }}</td>
                            <td>{{ $item->semail }}</td>
                            <td>
                                <button class="btn btn-danger" onclick="deleteStudent({{ $item->id }})">Delete</button>
                            </td>
                        </tr>
                        @php $serialNumber++ @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function deleteStudent(id) {
            if (confirm('Are you sure you want to delete this student record?')) {
                // Send an AJAX request to delete the student record
                axios.delete(`/students/${id}`)
                    .then(function (response) {
                        // Reload the page or update the view as needed
                        location.reload(); // This will refresh the page
                    })
                    .catch(function (error) {
                        console.error('Error deleting Student record:', error);
                    });
            }
        }
    </script>
@endsection

