@extends('client.layout.master')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }


        #selected-seats {
            margin-top: 20px;
        }

        .selected-seat {
            background-color: yellow;
        }
    </style>

<form action="{{ route('book.place.seat') }}" method="post">
    @csrf
    <div id="go_beyond_area" class="section_padding_top">
        <div class="container">
            <h2>Chọn chỗ ngồi</h2>
            <table>
                <tr>
                    <th>#</th>
                    <th>Chỗ số</th>
                    <th>Trạng thái</th>
                </tr>
                @foreach ($seatDetails as $index => $seatDetail)
                    <tr onclick="toggleSeatSelection(this, '{{ $seatDetail->status }}')">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $seatDetail->seat_number }}</td>
                        <td>{{ $seatDetail->status }}</td>
                    </tr>
                @endforeach
            </table>
            <div>
                <label for="selected-seats-input">Chỗ ngồi đã chọn:</label>
                <input type="text" id="selectedSeat" name="selectedSeat" readonly>
                <button type="submit">Done</button>
            </div>
        </div>
    </div>
</form>



@endsection
@section('js-custom')
<script>
    var selectedSeats = [];
    function toggleSeatSelection(row, status) {
        var seatNumber = row.cells[1].textContent;
        var inputElement = document.getElementById('selectedSeat');

        if (status === 'available') {
            var seatIndex = selectedSeats.indexOf(seatNumber);
            if (seatIndex === -1) {
                selectedSeats.push(seatNumber);
                row.classList.add('selected-seat');
            } else {
                selectedSeats.splice(seatIndex, 1);
                row.classList.remove('selected-seat');
            }

            inputElement.value = selectedSeats.join(', ');
        }
    }

    function clearSelectedSeats() {
        var inputElement = document.getElementById('selectedSeat');
        selectedSeats.forEach(function(seatNumber) {
            var rows = document.querySelectorAll('td:nth-child(2):contains(' + seatNumber + ')');
            rows.forEach(function(row) {
                row.parentElement.classList.remove('selected-seat');
            });
        });
        selectedSeats = [];
        inputElement.value = '';
    }
</script>
@endsection
