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
                    <select name="wallet" class="form-control">
                        <option value="trx">TRX</option>
                        <option value="fwt">FWT</option>
                        <option value="tpc">TPC</option>
                    </select>
                </div>
                <br><br>
                
                  <h6>To Another Wallet</h6>
                <hr>
                
                  <div class="form-group mb-3">
                      <label for="amount">Enter wallet Address</label>
                      <input type="text" name="w-address" class="form-control" placeholder="Enter wallet">
                  </div>

                  <div class="form-group mb-3">
                    <label for="amount">Wallet Type</label> 
                    <select name="" class="form-control">
                        <option value="btc">BTC</option>
                        <option value="ltc">LTC</option>
                        <option value="eth">ETH</option>
                        <option value="eth">TRX</option>
                        <option value="eth">FWT</option>
                        <option value="eth">TPC</option>
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