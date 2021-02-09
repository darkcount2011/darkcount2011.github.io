<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>Document</title>
</head>
<body>
<h1> FAQpage</h1>

<table>
    <tr>
    <td>
    @foreach($faqpages as $faqpage)
    <li>{{  $faqpage -> question}}</li>
    @endforeach
    </td>
    <td>
        @foreach($faqpages as $faqpage)
            <li>{{$faqpage->answer}}</li>
        @endforeach
            </td>
        <td>
    </tr>

</table>


</body>
</html>
