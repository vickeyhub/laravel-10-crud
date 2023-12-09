@include('components/head')
<body>
    <div class="container">
        <h1 class="text-center border-bottom border-secondary pb-2 text-uppercase">user's List</h1>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ url('/user/create') }}" class="btn btn-success">Add New <i class="fa-solid fa-plus"></i></A>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile No.</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            <tr>
                    <td>1</td>
                    <td><a class="link fw-bold" href="#">Vishal</a></td>
                    <td>vishalweb9@gmail.com</td>
                    <td>7860652149</td>
                    <td>04 Dec, 2023</td>
                    <td class="d-flex flex-row justify-content-center align-items-center"><span
                            class="badge bg-success">Active</span></td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-pencil"></i></a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td><a class="link fw-bold" href="#">Himanshu</a></td>
                    <td>Himanshu.singh@gmail.com</td>
                    <td>7398729875</td>
                    <td>04 Dec, 2023</td>
                    <td class="d-flex flex-row justify-content-center align-items-center"><span
                            class="badge bg-danger">Inctive</span></td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-pencil"></i></a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>