{{-- withdraw modal --}}

    <!-- Modal -->
    <div class="modal fade" id="withdrawmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Withdraw</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ route("withdraw")}}" method="post">
                @csrf
                <h6>From Internal Wallet</h6>
                <hr>
                <div class="form-group mb-3">
                  <label for="amount">Amount</label>
                  <input type="number" name="amount" class="form-control" value="0" id="exampleInputEmail1" placeholder="Enter amount">
                </div>

                <div class="form-group mb-3">
                    <label for="amount">Wallet Type</label> 
                    <select id="inner-wallet" class="form-control">
                      @foreach($wallets  as $wallet)
                      <option id={{$wallet->name}} value={{$wallet->balance}}>{{$wallet->coin}}</option>
                      @endforeach
                    </select>
                    <input type="hidden" id="coinname" name="wallet" value={{$wallets [0]->name}}>
                </div>

                <div class="form-group mb-3">
                  <label for="amount">Available Balance</label>
                  <input type="number" name="balance" class="form-control" value={{$wallets [0]->balance}} id="balance" placeholder="Balance" disabled>
                </div>

                <br><br>
                
                  <h6>To Another Wallet</h6>
                <hr>
                
                  <div class="form-group mb-3">
                      <label for="amount">Enter wallet Address</label>
                      <input type="text" name="address" class="form-control" placeholder="Enter wallet">
                  </div>

                  <div class="form-group mb-3">
                    <label for="amount">Wallet Type</label> 
                    <select name="newwallet" class="form-control">
                      @foreach($wallets  as $wallet)
                      <option value={{$wallet->coin}}>{{$wallet->coin}}</option>
                      @endforeach
                    </select>
                </div>

              
            </div>
            <div class="modal-footer">
              {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    {{-- end of withdraw modal --}}

    <script>
      document.getElementById('inner-wallet').onchange = function() {
        var balance = document.getElementById('inner-wallet').value;
        document.getElementById('balance').value = balance;
        
        let x = document.getElementById("inner-wallet");
        document.getElementById('coinname').value = x.options[x.selectedIndex].id;
      }
    </script>