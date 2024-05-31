<!-- resources/views/higher_ed_programs/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Higher Ed Programs</title>
</head>
<body>
    <h1>Higher Ed Programs</h1>
    <table>
        <thead>
            <tr>
                <th>State Name</th>
                <th>Institution Name</th>
                <th>Program Title</th>
                <th>Program Type</th>
                <th>Level of Degree</th>
                <th>Format</th>
                <th>Alternate Route to Certification</th>
                <th>Category of Credentialing</th>
                <th>URL for Program</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($programs as $program)
                <tr>
                    <td>{{ $program->state_name }}</td>
                    <td>{{ $program->ihe_name }}</td>
                    <td>{{ $program->program_title }}</td>
                    <td>{{ $program->program_type }}</td>
                    <td>{{ $program->level_of_degree }}</td>
                    <td>{{ $program->format }}</td>
                    <td>{{ $program->alternate_route_to_certification ? 'Yes' : 'No' }}</td>
                    <td>{{ $program->category_of_credentialing }}</td>
                    <td><a href="{{ $program->url_for_program }}" target="_blank">Program Link</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
