{{-- fund modal --}}

    <!-- Modal -->
    <div class="modal fade" id="fundmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Fund</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p class="mb-3"><b>Instruction</b></p>
              <p>
                Make a deposit to any of the listed wallet. You can fund your swap room by using any of the listed wallet.
              </p>
              

              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <button style="width: 100%; height: 100px;" class="card active">
                    hello
                  </button>
                </div>

                <div class="col-xs-12 col-md-4">
                  <button style="width: 100%; height: 100px;" class="card">
                    hello
                  </button>
                </div>

                <div class="col-xs-12 col-md-4">
                  <button style="width: 100%; height: 100px;" class="card">
                    hello
                  </button>
                </div>
              </div>

              <div class="form-group mt-5">
                <label for="">Wallet</label>
                <input type="text" value="wereawertrewqer" class=" form-control" disabled>
              </div>
              

            </div>
            <div class="modal-footer" style="justify-content: space-between">
              <label for="">
                <input type="checkbox" id="deposited-check" name="deposited" value="true">
                  I confirm that I have made a deposit
              </label>

              <div>
                <button type="submit" id="deposited-btn" class="btn btn-primary disabled">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    {{-- end of fund modal --}}

    <script>
      document.getElementById('deposited-check').onclick = function() {
        if (this.checked) {
          // alert('You have confirmed that you have made a deposit');
          document.getElementById('deposited-btn').classList.remove('disabled');
        }else{
          // alert('You have not confirmed that you have made a deposit');
          document.getElementById('deposited-btn').classList.add('disabled');
        }
      }
    </script>