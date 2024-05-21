<table>
    <tr>
        <th>Date</th>
        <th>User Pseudo</th>
        <th>Modo Pseudo</th>
        <th>Type</th>
        <th>Durée</th>
        <th>Détail</th>
    </tr>
    @foreach ($punishements as $punishement)
        <tr>
            <td>{{ $punishement->created_at->translatedFormat('d/m/Y H:i') }}</td>
            <td>{{ $punishement->player->pseudo }}</td>
            <td>{{ $punishement->moderator->pseudo }}</td>
            <td>{{ $punishement->type }}</td>
            <td>{{ $punishement->duration }}</td>
            <td>{{ $punishement->reason }}</td>
        </tr>
    @endforeach
</table>

<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
