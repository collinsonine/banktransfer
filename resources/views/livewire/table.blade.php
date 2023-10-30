<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Price</th>
                <th class="text-center">Rank</th>
                <th class="text-center"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($coins as $index => $coin)
            <tr wire:key='{{$index}}'>
                <td class="text-center">{{$coin->name}}</td>
                <td class="text-center">${{number_format($coin->priceUsd, 2)}}</td>
                <td class="text-center">{{$coin->rank}}</td>
                <td class="text-center"><a href="{{$coin->explorer}}" target="_blank" class="btn btn-primary">
                        Buy</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
