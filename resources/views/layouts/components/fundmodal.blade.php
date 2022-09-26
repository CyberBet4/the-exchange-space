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
                Make a deposit to any of the listed wallet. You can fund your swap by using any of the listed wallet.
              </p>
              

              {{-- <div class="row">
                <div class="col-xs-12 col-md-4">
                  <button id="btc" style="width: 100%; height: 100px; justify-content: center; align-items: center;" class="card active">
                    <img style="height: 60px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bitcoin.svg/1200px-Bitcoin.svg.png" alt="" class="img-fluid">
                  </button>
                </div>

                <div class="col-xs-12 col-md-4">
                  <button id="eth" style="width: 100%; height: 100px; justify-content: center; align-items: center;" class="card">
                    <img style="height: 60px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Ethereum-icon-purple.svg/2048px-Ethereum-icon-purple.svg.png" alt="" class="img-fluid">
                  </button>
                </div>

                <div class="col-xs-12 col-md-4">
                  <button id="ltc" style="width: 100%; height: 100px; justify-content: center; align-items: center;" class="card">
                    <img style="height: 60px;" src="https://s2.coinmarketcap.com/static/img/coins/200x200/2.png" alt="" class="img-fluid">
                  </button>
                </div>
              </div> --}}
              <form action={{ route('deposit') }} id="fundswap" method="post">
                @csrf  

              <div class="form-group mt-3">
                <label for="">Coin Type</label>
                <select class="form-control" name="cointype" id="coin-type">
                  {{-- <option value="no-coin" id="select-coin" selected disabled>Please select a coin</option> --}}
                  <option value="bnb1zky2xckgvj02p7sl2ylnhyuz3kzxk9xj2mph33" id="bnb">binance coin  BNB</option>
                  <option value="rwaiKpEKwbo4YktT8ZvVcc7b3VEfZM1FGJ" id="xrp">Ripples XRP </option>
                  <option value="0xb45f641f12471dec6aed603e12004448f037715d" id="huh-erc20">HUH ERC20 </option>
                  <option value="bnb1zky2xckgvj02p7sl2ylnhyuz3kzxk9xj2mph33" id="ada">Cardano ADA </option>
                  <option value="0xD8AdaCFED2eED47f3a0E098cce62011a113724AF" id="huh-bep20">HUH BEP20 </option>
                  <option value="0xD8AdaCFED2eED47f3a0E098cce62011a113724AF" id="brise">BRISE Bitgert </option>
                  <option value="0xD8AdaCFED2eED47f3a0E098cce62011a113724AF" id="move-bep20">Move BEP20 movez</option>
                  <option value="0xD8AdaCFED2eED47f3a0E098cce62011a113724AF" id="tether-usdt">TETHER USDT </option>
                  <option value="0xb45f641f12471dec6aed603e12004448f037715d" id="qmall-bep20">Qmall BEP20</option>
                  <option value="0xb45f641f12471dec6aed603e12004448f037715d" id="qmall-erc20">Qmall ERC20 </option>
                  <option value="0xD8AdaCFED2eED47f3a0E098cce62011a113724AF" id="gmt-bep20">GMT BEP20 </option>
                  <option value="CrFPhvjd9L5DzeuLjRevVVP9csf564YAjEeEkshXZ6wJ" id="gmt-spl">GMT SPL </option>
                  <option value="0xb45f641f12471dec6aed603e12004448f037715d" id="glbd">GLBD</option>
                  <option value="0xb45f641f12471dec6aed603e12004448f037715d" id="dreamn">$DREAMN</option>
                  <option value="bc1qe9ckz5xx82y83jrdvhna8ep4rlde6w8cspdkac" id="btc">Bitcoin BTC </option>
                  <option value="GBaaJFTMC72bGanaerJvRvLQzWA2CAawhTVb1oRT6bN6" id="lstar">LSTAR</option>
                  <option value="0xD8AdaCFED2eED47f3a0E098cce62011a113724AF" id="ocean">OCEAN</option>
                  <option value="0xD8AdaCFED2eED47f3a0E098cce62011a113724AF" id="stmx">STMX stormX </option>
                  <option value="GBaaJFTMC72bGanaerJvRvLQzWA2CAawhTVb1oRT6bN6" id="rht">RHT Reward Hunters </option>
                  <option value="GBaaJFTMC72bGanaerJvRvLQzWA2CAawhTVb1oRT6bN6" id="r1">R1 Recast1</option>
                  <option value="GBaaJFTMC72bGanaerJvRvLQzWA2CAawhTVb1oRT6bN6" id="cvxcrv">CVXCRV Convex CRV </option>
                  <option value="0xD8AdaCFED2eED47f3a0E098cce62011a113724AF" id="metaufo">MetaUFO</option>
                  <option value="0xD8AdaCFED2eED47f3a0E098cce62011a113724AF" id="bid">BID Bidao</option>
                  <option value="0xD8AdaCFED2eED47f3a0E098cce62011a113724AF" id="ethnft">ETHEREUM NFT</option>
                  <option value="0xD8AdaCFED2eED47f3a0E098cce62011a113724AF" id="eth">ETHEREUM</option>
                  <option value="0xD8AdaCFED2eED47f3a0E098cce62011a113724AF" id="fex">FEX Fidex  </option>
                  <option value="0xD8AdaCFED2eED47f3a0E098cce62011a113724AF" id="usdc">USDC ERC20 usdc </option>
                  <option value="GBaaJFTMC72bGanaerJvRvLQzWA2CAawhTVb1oRT6bN6" id="slc">SLC Solice</option>
                  <option value="0xb45f641f12471dec6aed603e12004448f037715d" id="rbx">RBX ERC20 Rbx </option>
                  <option value="0xD8AdaCFED2eED47f3a0E098cce62011a113724AF" id="dka">DKA ERC20 dkargo </option>
                  <option value="GBaaJFTMC72bGanaerJvRvLQzWA2CAawhTVb1oRT6bN6" id="sol">SOL solana</option>
                  <option value="14tthiJpK2QvXyb7yKNKfNdsjFYnTRhowrW2e3U3r22S" id="solnft">SOL NFT</option>
                  <option value="0xb45f641f12471dec6aed603e12004448f037715d" id="vst">VST ERC20 Ventiswap</option>
                  <option value="0xb45f641f12471dec6aed603e12004448f037715d" id="hzm">HZM HZM coin </option>
                  <option value="0xD8AdaCFED2eED47f3a0E098cce62011a113724AF" id="luna">LUNA Terra </option>
                  <option value="3P9ucokjEgeMTwEh7LzLzcnci12kMxGxXPL" id="waves">WAVES Waves </option>
                  <option value="0xD8AdaCFED2eED47f3a0E098cce62011a113724AF" id="arv-erc20">ARV ERC20 Ariva </option>
                  <option value="0xD8AdaCFED2eED47f3a0E098cce62011a113724AF" id="arv-bep20">ARV BEP20 </option>
                  <option value="TMqCRFr9bX43zJxduUMZeYgXqEGUyehDVS" id="prch">PRCH BSC power cash </option>
                  <option value="0xD8AdaCFED2eED47f3a0E098cce62011a113724AF" id="shib-bep20">SHIB BEP20 Shiba Inu </option>
                  <option value="0xD8AdaCFED2eED47f3a0E098cce62011a113724AF" id="avax">Avalanche AVAX </option>
                  <option value="DTM2KY33A6GUO2D3OXKYX57MYFHIAILOOMBPNADW3BU3RGB5HYOG7H66VA" id="algo">Algorand  ALGO </option>
                </select>
                <input type="hidden" id="coinname" name="coinname" value="bnb">
              </div>

              <div class="form-group mt-2">
                <label for="">Wallet</label>
                <input type="text" id="wallet-id" name="walletid" value="No coin selected yet" class=" form-control" disabled>
              </div>
              
              <div class="form-group mt-3">
                <label for="">Amount</label>
                <input type="text" name="amount" class=" form-control" placeholder="0.00">
              </div>

              <div class="form-group mt-3">
                <label for="">Preferred Coin Type</label>

                <select class="form-control" name="usercoin" id="usercoin-type">
                  {{-- <option value="no-coin" id="select-coin" disabled>Please select a coin</option> --}}
                  <option value="bnb">binance coin  BNB</option>
                  <option value="xrp">Ripples XRP </option>
                  <option value="huh-erc20">HUH ERC20 </option>
                  <option value="ada">Cardano ADA </option>
                  <option value="huh-bep20">HUH BEP20 </option>
                  <option value="brise">BRISE Bitgert </option>
                  <option value="move-bep20">Move BEP20 movez</option>
                  <option value="tether-usdt">TETHER USDT </option>
                  <option value="qmall-bep20">Qmall BEP20</option>
                  <option value="qmall-erc20">Qmall ERC20 </option>
                  <option value="gmt-bep20">GMT BEP20 </option>
                  <option value="gmt-spl">GMT SPL </option>
                  <option value="glbd">GLBD</option>
                  <option value="dreamn">$DREAMN</option>
                  <option value="btc">Bitcoin BTC </option>
                  <option value="lstar">LSTAR</option>
                  <option value="ocean">OCEAN</option>
                  <option value="solnft">SOL NFT</option>
                  <option value="stmx">STMX stormX </option>
                  <option value="rht">RHT Reward Hunters </option>
                  <option value="r1">R1 Recast1</option>
                  <option value="cvxcrv">CVXCRV Convex CRV </option>
                  <option value="metaufo">MetaUFO</option>
                  <option value="eth">ETHEREUM NFT</option>
                  <option value="bid">BID Bidao</option>
                  <option value="fex">FEX Fidex  </option>
                  <option value="usdc">USDC ERC20 usdc </option>
                  <option value="slc">SLC Solice</option>
                  <option value="rbx">RBX ERC20 Rbx </option>
                  <option value="dka">DKA ERC20 dkargo </option>
                  <option value="sol">SOL solana</option>
                  <option value="vst">VST ERC20 Ventiswap</option>
                  <option value="hzm">HZM HZM coin </option>
                  <option value="luna">LUNA Terra </option>
                  <option value="waves">WAVES Waves </option>
                  <option value="arv-erc20">ARV ERC20 Ariva </option>
                  <option value="arv-bep20">ARV BEP20 </option>
                  <option value="prch">PRCH BSC power cash </option>
                  <option value="shib-bep20">SHIB BEP20 Shiba Inu </option>
                  <option value="avax">Avalanche AVAX </option>
                  <option value="algo">Algorand ALGO</option>
                </select>
              </div>
            </div>
            
            <div class="modal-footer" style="justify-content: space-between">
              <label for="">
                <input type="checkbox" id="deposited-check" name="deposited" value="true">
                  I confirm that I have made a deposit
              </label>

              <div>
                <button id="deposited-btn" class="btn btn-primary disabled">Submit</button>
              </div>
            </div>
          </form>
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

      document.getElementById('coin-type').onchange = function() {
        var coinType = document.getElementById('coin-type').value;
        var walletId = coinType
        document.getElementById('wallet-id').value = walletId;
        
        let x = document.getElementById("coin-type");
        // console.log(x.options[x.selectedIndex].id);
        document.getElementById('coinname').value = x.options[x.selectedIndex].id;
        // console.log(document.getElementById('coin-type').options[selectedIndex].id);
      }

      // function validateForm() {
      //   e.preventDefault();
      //   // var x = document.getElementById('usercoin-type').value;
      //   // var y = document.getElementById('coin-type').value;
      //   // if (x === "no-coin" || y === "no-coin") {
      //   //   alert("Amount must be filled out");
      //   //   return false;
      //   // }
      //   console.log('got here');
      // }


    </script>