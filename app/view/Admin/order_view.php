<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Sifarişlər</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <table class="table table-bordered table-hover">
            <tbody>
                <tr>
                    <td>№</td>
                    <td>Sifarişçi Şirkət</td>
                    <td>Sifarişin adı</td>
                    <td>Əlaqədar şəxs</td>
                    <td>Sifariş başlama tarixi/saatı</td>
                    <td>Sifariş bitmə tarixi/saatı</td>
                    <td>Əlaqə nömrəsi</td>
                    <td>Email ünvanı</td>
                    <td>Sifariş gəldiyi vaxt</td>
                </tr>
                
                    <?php 
                        $i=1;
                        foreach ($data['order'] as $key => $order) {

                            extract($order);

                            if($sifarisci == 1 or $sifarisci == 0){
                                $type = 'Fiziki şəxs';
                                $order_company = $type;
                            }elseif($sifarisci == 2){
                                $type = 'Hüquqi Şəxs';
                            }
                    ?>
                    <tr class="<?php echo ($order_read == 0) ? 'info' : ''; ?>">
                        <td><?php echo $i++;?></td> 
                        <td><?php echo $order_company;?></td> 
                        <td><?php echo $serv_name;?></td>
                        <td><?php echo $order_name;?></td>
                        <td><?php echo $order_begin_date." [".$order_begin_time."]";?></td>
                        <td><?php echo $order_end_date." [".$order_end_time."]";?></td>
                        <td><?php echo $order_phone;?></td>
                        <td><?php echo $order_email;?></td>
                        <td><?php echo $order_now_date."[".$order_now_clock."]";?></td>
                    </tr>
                    <?php
                        }
                    ?>
                
            </tbody>
        </table>
    </div>
</div>