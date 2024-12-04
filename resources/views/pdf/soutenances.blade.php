<!DOCTYPE html>
<html>
<head>
    <title>Liste des Soutenances</title>
    <style>
        /* Basic styling for the PDF */
        body {
            font-family: sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Liste des Soutenances</h1>

    <table>
        <thead>
            <tr>
                <th>Étudiant</th>
                <th>Encadreur</th>
                <th>Jury 1</th>
                <th>Jury 2</th>
                <th>Société</th>
                <th>Salle</th>
                <th>Classe</th>
                <th>Heure</th>
                <th>Date de Soutenance</th>
            </tr>
        </thead>
        <tbody>
            @foreach($soutenances as $soutenance)
                <tr>
                    <td>{{ $soutenance->etudiant ?? 'N/A' }}</td>
                    <td>{{ $soutenance->encadrant }}</td>
                    <td>{{ $soutenance->jury1 }}</td>
                    <td>{{ $soutenance->jury2 }}</td>
                    <td>{{ $soutenance->societe }}</td>
                    <td>{{ $soutenance->salle }}</td>
                    <td>{{ $soutenance->classe }}</td>
                    <td>{{ $soutenance->heure }}</td>
                    <td>{{ $soutenance->date_soutenance }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>