$(document).ready(function () {
    $('#search, #minage, #maxage').on('input', function () {
        let query = $('#search').val().trim();
        let min = $('#minage').val();
        let max = $('#maxage').val();
        $.ajax({
            url: '/students',
            method: 'GET',
            data: { search: query, min: min, max: max },
            dataType: 'json',
            success: function (response) {
                let studentList = '';
                if (response.length > 0) {
                    response.forEach(function (student) {
                        studentList += `
                            <tr>
                                <td>${student.id}</td>
                                <td>${student.name}</td>
                                <td>${student.age}</td>
                                <td>
                                   <a href="{{route('students.show', $student->id)}}" class="btn btn-success btn-sm">Show</a>
                                   <a href="{{route('students.edit', $student->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                   <form action="{{route('students.destroy', $student->id)}}" method="POST">
                                       @csrf
                                       @method('Delete')
                                       <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                   </form>
                               </td>
                           </tr>`;
                    });
                } else {
                    studentList = `<tr><td colspan="3">No students found</td></tr>`;
                }
                $('#student-table').html(studentList);
            }
        });
    });
});