<!DOCTYPE html>
<html>

<head>
    <title>How To Generate Pdf From Html View File And Download Using Laravel 10 Example - NiceSnippets.com</title>
</head>
<style type="text/css">
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table td,
    table th {
        border: 1px solid black;
        text-align: center;
    }

    table tr,
    table td {
        padding: 5px;
    }
</style>

<body>
    <div class="container">
        <br />
        <h4>How To Generate Pdf From Html View File And Download Using Laravel 10 Example - NiceSnippets.com</h4>
        <a href="{{ route('itemPdfView', ['download' => 'pdf']) }}">Download PDF</a>
        <table>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
            @foreach ($items as $key => $item)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->title }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
