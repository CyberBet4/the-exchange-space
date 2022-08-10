<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('is_admin')->default(0);
            $table->integer('active_swap')->default(0);
            $table->integer('completed_swap')->default(0);
            $table->integer('bnb')->default(0);
            $table->integer('xrp')->default(0);
            $table->integer('ada')->default(0);
            $table->integer('brise')->default(0);
            $table->integer('move')->default(0);
            $table->integer('usdt')->default(0);
            $table->integer('qmall_bep20')->default(0);
            $table->integer('qmall_erc20')->default(0);
            $table->integer('gmt_bep20')->default(0);
            $table->integer('gmt_spl')->default(0);
            $table->integer('glbd')->default(0);
            $table->integer('dreamn')->default(0);
            $table->integer('btc')->default(0);
            $table->integer('lstar')->default(0);
            $table->integer('ocean')->default(0);
            $table->integer('rht')->default(0);
            $table->integer('r1')->default(0);
            $table->integer('cvxcrv')->default(0);
            $table->integer('metaufo')->default(0);
            $table->integer('bid')->default(0);
            $table->integer('usdc_erc20')->default(0);
            $table->integer('slc')->default(0);
            $table->integer('rbx_erc20')->default(0);
            $table->integer('dka_erc20')->default(0);
            $table->integer('sol')->default(0);
            $table->integer('solana')->default(0);
            $table->integer('vst_erc20')->default(0);
            $table->integer('hzm')->default(0);
            $table->integer('eth')->default(0);
            $table->integer('ethnft')->default(0);
            $table->integer('luna')->default(0);
            $table->integer('waves')->default(0);
            $table->integer('stmx')->default(0);
            $table->integer('fex')->default(0);
            $table->integer('huh_bep20')->default(0);
            $table->integer('huh_erc20')->default(0);
            $table->integer('arv_erc20')->default(0);
            $table->integer('arv_bep20')->default(0);
            $table->integer('prch_bsc')->default(0);
            $table->integer('shib_bep20')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
