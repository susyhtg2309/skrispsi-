<div class="row">
    <!-- Right Sidebar -->
    <div class="col-12">
        <div class="card-box">
            <!-- Left sidebar -->
            <div class="inbox-leftbar">
                <a href="#" class="btn btn-danger btn-block waves-effect waves-light">Naive Bayes Menu</a>
                <div class="mail-list mt-4">
                    <a href="<?=base_url()?>NaiveBayes/process/dataset" class="list-group-item border-0 <?=$page=='dataset'?'font-weight-bold':'';?>">1. Dataset</a>
                    <a href="<?=base_url()?>NaiveBayes/process/init" class="list-group-item border-0 <?=$page=='init'?'font-weight-bold':'';?>">2. Initial Process</a>
                    <a href="<?=base_url()?>NaiveBayes/process/performance" class="list-group-item border-0 <?=$page=='performance'?'font-weight-bold':'';?>">3. Performance</a>
                    <a href="<?=base_url()?>NaiveBayes/process/prediksi" class="list-group-item border-0 <?=$page=='prediksi'?'font-weight-bold':'';?>">4. Prediksi</a>
                </div>
            </div>
            <!-- End Left sidebar -->
            <div class="inbox-rightbar">
              <?php
                $history = $this->db->query("SELECT
                  `Prodi`,
                  CASE WHEN `ipk` <= 2.9 THEN 'Kurang Baik (2.5 - 2.9)' WHEN ipk <= 3.3 THEN 'Baik (3.0 - 3.3)' ELSE 'Sangat Baik (3.5 - 4.0)' END AS IPK,
                  CASE WHEN `jumlah_tanggungan` <= 3 THEN 'Sedikit (1 - 3)' WHEN jumlah_tanggungan <= 7 THEN 'Sedang (3 - 7)' ELSE 'Banyak (>= 7)' END AS Jumlah_Tanggungan,
                  CASE WHEN `penghasilan` <= 3000000 THEN 'Rendah (1.5jt - 3jt)' WHEN penghasilan <= 8000000 THEN 'Sedang (4jt - 8jt)' ELSE 'Tinggi (>= 9jt)' END AS Penghasilan,
                  `kelas`
                FROM
                  `mlc_nb_ervila`.`dataset`;
                	")->result_array();
                $column = array();
                if(sizeof($history)>0){
                  $column = $history[0];
                  $column = array_keys($column);
                }
              ?>
            <?php
                //Dataset
                if($page == 'dataset' && sizeof($column)>0){
                ?>
                <div class="col-md-12">
                    <?php
                    $index = $column;
                    $dataset = $history;
                    ?>
                    <div class="card-box table-responsive">
                      <h4>Dataset Naive Bayes</h4>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <?php
                                foreach ($index as $key) {
                                  ?>
                                   <th><?=$key?></th>
                                  <?php
                                }
                            ?>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($dataset as $key) {
                                ?>
                                <tr>
                                    <?php
                                     foreach ($index as $keys) {
                                        ?>
                                            <td><?=$key[$keys]?></td>
                                        <?php
                                     }
                                    ?>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                <?php
                }
                if($page == 'init' && sizeof($column)>0){
                    ?>
                     <?php
                     $index = $column;
                     $dataset = $history;
                    ?>
                    <div class="card-box table-responsive">
                      <h4>Initial Process</h4>
                      <table class="table table-border">
                        <thead>
                          <tr>
                            <?php
                                foreach ($index as $key) {
                                  ?>
                                   <th><?=$key?></th>
                                  <?php
                                }
                            ?>
                          </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td align="center" style="border-right: 1px solid black;" colspan="<?=sizeof($index)-1?>"><b>--Atribut Pendukung--</b></td>
                            <td align="center"><b>--Label Target--</b></td>
                        </tr>
                            <?php
                            foreach ($dataset as $key) {
                                ?>

                                <tr>
                                    <?php
                                    $x=0;
                                     foreach ($index as $keys) {
                                        $x++;
                                        ?>
                                            <td class="<?=$x==sizeof($index)?'table-success':'table-warning';?>"><?=$key[$keys]?></td>
                                        <?php
                                     }
                                    ?>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                      </table>
                    </div>
                    <?php
                }
                if($page == 'prediksi' && sizeof($column)>0){
                      $index = $column;
                      $dataset = $history;
                        foreach ($index as $key) {
                            $label[$key] = array_unique(array_column($dataset,$key));
                        }
                        $datatoprediksi = [];
                        foreach ($dataset as $key) {
                            $rowdata=[];
                           foreach ($index as $keys) {
                            $rowdata[]=$key[$keys];
                           }
                           $datatoprediksi[]=$rowdata;
                        }
                        ?>
                        <div class="card-box">
                            <div class="row">
                            <div class="col-md-6">
                            <h4>Prediksi</h4>
                            <form method="POST" action="">
                                <?php
                                $x=0;
                                $lab = [];
                                foreach ($label as $key => $value) {
                                    $x++;array_push($lab,$key);
                                    if((sizeof($label))>$x){
                                      ?>
                                      <div class="form-group">
                                       <label><?=$key?></label>
                                          <select name="pred[]" class="form-control">
                                           <?php
                                               foreach ($value as $keys) {
                                                 $PRED = $this->input->post('pred');
                                                  ?>
                                                   <option value="<?=$keys?>" <?=isset($PRED[$x-1])?$PRED[$x-1]==$keys?'selected':'':''?>><?=$keys?></option>
                                                  <?php
                                               }
                                           ?>
                                          </select>
                                      </div>
                                      <?php
                                    }
                                }
                            ?>
                            <div class="form-group">
                               <button class="btn btn-primary" name="prediksi" value="1" type="submit">Prediksi</button>
                            </div>
                            </form>
                            </div>
                            <div class="col-md-6">
                                <?php
                                    if($this->input->post('prediksi') !== NULL){
                                        $this->session->set_userdata("prediksi",true);
                                        $predict = $this->input->post('pred');
                                        $this->naivebayes->init($datatoprediksi,$predict);
                                        $result = $this->naivebayes->predict();
                                        $conf_matrix = $this->naivebayes->conf_matrix($datatoprediksi,$predict);
                                        $conf_matrix_label_composition = $this->naivebayes->label_composition($datatoprediksi,$predict);
                                        ?>
                                        <h4>Proses</h4>
                                        <div class="card card-body bg-info text-white">
                                            <h4 class="card-title mb-0 text-white">Total Label</h4>
                                             <p class="card-text">
                                             <?php
                                               foreach ($this->naivebayes->reslabel as $key => $val) {
                                                   ?>
                                                    <?=$key?> : <?=$val?> <?=isset($result[$key])?"(".$result[$key].")":''?><br />
                                                   <?php
                                               }
                                             ?>
                                             </p>
                                        </div>
                                        <h4>Hasil</h4>
                                        <div class="card card-body bg-primary text-white">
                                        <h4 class="card-title mb-2 text-white">Hasil Prediksi</h4>
                                        <?php
                                            $hasil = $result;
                                            asort($hasil);
                                            $x=0;
                                            $prediksi="";
                                            foreach ($hasil as $key => $val) {
                                                if($x==sizeof($result)-1){
                                                    $prediksi=$key;
                                                }
                                                $x++;
                                                ?>
                                                     <?php
                                                        echo $key." : ".$val."<br />";
                                                     ?>
                                                <?php
                                            }
                                        ?>
                                        <h4 class="card-title mb-2 text-white" align="center"><?=$prediksi;?></h4>
                                        </div>
                                        <?php
                                            foreach ($this->naivebayes->resall as $key=>$val) {
                                               foreach ($val as $keys => $value) {
                                                  ?>
                                                    <div class="card card-body bg-warning text-white">
                                                        <h4 class="card-title mb-0 text-white"><?=$lab[$key]?> :: <?=$keys?></h4>
                                                         <p class="card-text mb-0">
                                                         <?php
                                                           foreach ($value as $keyn => $vals) {
                                                               echo $keyn." : ".$vals.",&nbsp;";

                                                           }
                                                         ?>
                                                         </p>
                                                         <hr />
                                                         <?php
                                                          foreach ($conf_matrix[$key] as $cm=>$cmv) {
                                                              echo $cm."<br />";
                                                              foreach ($cmv as $cmv2=>$cmv2v) {
                                                                echo "<div class='ml-4'>* ".$cmv2.": ".$cmv2v."</div>";
                                                                echo "<div class='ml-4'>".$cmv2v."/".$conf_matrix_label_composition[$cmv2]."=".($cmv2v/$conf_matrix_label_composition[$cmv2])."</div>";
                                                              }
                                                          }
                                                         ?>
                                                    </div>
                                                    <hr/>
                                                <?php
                                               }
                                            }
                                        ?>
                                      <!-- hasil prediksi -->
                                        <?php
                                        if($this->session->userdata('prediksi')==true){
                                          // $temp = array();
                                          // $temp['uniqid'] = uniqid();
                                          // $labels = array_keys($label);
                                          // $x=0;
                                          // foreach ($labels as $key) {
                                          //   if($x<sizeof($labels)-1){
                                          //     $temp[$key] = $predict[$x];
                                          //   }else{
                                          //     $temp[$key] = $prediksi;
                                          //   }
                                          //   $x++;
                                          // }
                                          // $this->db->insert("history",
                                          //   array(
                                          //     "nama"=>$this->input->post("nama"),
                                          //     "jenis_kelamin"=>$temp['jenis_kelamin'],
                                          //     "usia"=>$temp['usia'],
                                          //     "tinggi_badan"=>$temp['tinggi_badan'],
                                          //     "berat_badan"=>$temp['berat_badan'],
                                          //     "lingkar_perut"=>$temp['jenis_kelamin'],
                                          //     "kurang_aktifitas_fisik"=>$temp['kurang_aktifitas_fisik'],
                                          //     "gula_berlebih"=>$temp['gula_berlebih'],
                                          //     "garam_berlebih"=>$temp['garam_berlebih'],
                                          //     "lemak_berlebih"=>$temp['lemak_berlebih'],
                                          //     "kurang_makan_buah_sayur"=>$temp['kurang_makan_buah_sayur'],
                                          //     "diagnosa"=>$temp['diagnosa']
                                          // ));
                                          $this->session->set_userdata("prediksi",false);
                                        }
                                    }
                                ?>
                            </div>
                            </div>
                        </div>
                        <?php
                }
                if($page == 'performance' && sizeof($column)>0){
                      $index = $column;
                      $dataset = $history;
                    ?>
                       <div class="card-box">
                            <div class="row">
                            <div class="col-md-6">
                            <h4>Uji Akurasi Metode</h4>
                            <form method="POST" action="" id="performance">
                                <div class="form-group">
                                    <label id="lab">Prosentase Data Training <?=$this->input->post('train')!==NULL?$this->input->post('train').'%, Data Testing '.(100-$this->input->post('train')).'%':''?></label>
                                    <select name="train" required="" onchange="if($(event.target).val()!=''){$('#lab').html('Prosentase Data Training '+$(event.target).val()+'%, Data Testing '+(100-$(event.target).val())+'%');$('#performance').submit();}else{$('#lab').html('Prosentase Data Training');}" class="form-control">
                                       <option value="">-- Pilih Prosentase --</option>
                                       <option value="10" <?=$this->input->post('train')==10?'selected':''?>>10 %</option>
                                       <option value="20" <?=$this->input->post('train')==20?'selected':''?>>20 %</option>
                                       <option value="30" <?=$this->input->post('train')==30?'selected':''?>>30 %</option>
                                       <option value="40" <?=$this->input->post('train')==40?'selected':''?>>40 %</option>
                                       <option value="50" <?=$this->input->post('train')==50?'selected':''?>>50 %</option>
                                       <option value="60" <?=$this->input->post('train')==60?'selected':''?>>60 %</option>
                                       <option value="70" <?=$this->input->post('train')==70?'selected':''?>>70 %</option>
                                       <option value="80" <?=$this->input->post('train')==80?'selected':''?>>80 %</option>
                                       <option value="90" <?=$this->input->post('train')==90?'selected':''?>>90 %</option>
                                    </select>
                                </div>
                            </form>
                            </div>
                            <div class="col-md-6">

                            </div>
                            </div>
                        </div>
                        <?php if($this->input->post('train')!==NULL){ ?>
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md-12 table-responsive">
                                    <h4>Pemisahan Data Training & Testing</h4>
                                    <?php
                                        $train = $this->input->post('train');
                                        shuffle($dataset);
                                        $countdata = sizeof($dataset);
                                        $ndatatrain = ($train/100)*$countdata;
                                        $ndatatrain = floor($ndatatrain);
                                        $newtraindata = [];
                                    ?>
                                    <table class="table table-border">
                                        <thead>
                                          <tr>
                                            <?php
                                                foreach ($index as $key) {
                                                  ?>
                                                   <th><?=$key?></th>
                                                  <?php
                                                }
                                            ?>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td align="center" colspan="<?=sizeof($index)?>"><b>--Data Training--</b></td>
                                        </tr>
                                            <?php
                                            $x=0;$flagtesting=0;
                                            foreach ($dataset as $key) {
                                                $x++;
                                                if($ndatatrain>=$x){
                                                ?>
                                                <tr>
                                                    <?php
                                                    $newtraindata_temp=[];
                                                    foreach ($index as $keys) {
                                                        $newtraindata_temp[]=$key[$keys];
                                                    ?>
                                                        <td class="table-primary"><?=$key[$keys]?></td>
                                                    <?php
                                                    }
                                                    $newtraindata[]=$newtraindata_temp;
                                                    ?>
                                                </tr>
                                                <?php
                                                }else{
                                                ?>
                                                <?php if($flagtesting==0){$flagtesting++; ?>
                                                <tr>
                                                <td align="center" colspan="<?=sizeof($index)?>"><b>--Data Testing--</b></td>
                                                </tr>
                                                <?php } ?>
                                                <tr>
                                                    <?php
                                                    foreach ($index as $keys) {
                                                    ?>
                                                        <td class="table-warning"><?=$key[$keys]?></td>
                                                    <?php
                                                    }
                                                    ?>
                                                </tr>
                                                <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <hr />
                                    <h4 class="mt-3">Proses Testing</h4>
                                    <table class="table table-border">
                                        <thead>
                                          <tr>
                                            <?php
                                                foreach ($index as $key) {
                                                  ?>
                                                   <th><?=$key?></th>
                                                  <?php
                                                }
                                            ?>
                                            <th>Hasil Testing</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $x=0;$benar=0;
                                            $label_index = array_key_last($dataset[0]);
                                            $label = array_column($dataset,$label_index);
                                            $label_uniq = array_unique($label);
                                            $confussion = array();
                                            foreach($label_uniq as $cf){
                                              foreach($label_uniq as $fc){
                                                $confussion[$cf][$fc]=0;
                                              }
                                            }
                                            foreach ($dataset as $key) {
                                                $x++;
                                                if($x>$ndatatrain){
                                                ?>
                                                <tr>
                                                    <?php
                                                    $predict=[];
                                                    foreach ($index as $keys) {
                                                    $predict[]=$key[$keys];
                                                    ?>
                                                        <td class="table-warning"><?=$key[$keys]?></td>
                                                    <?php
                                                    }
                                                    $pop = array_pop($predict);
                                                    $this->naivebayes->init($newtraindata,$predict);
                                                    $result = $this->naivebayes->predict();
                                                    asort($result);
                                                    $res=max($result);
                                                    ?>
                                                    <td class="table-primary">
                                                    <?php
                                                    $hsl=array_search($res, $result);
                                                    if($hsl==$pop){$benar++;}
                                                    $confussion[$pop][$hsl]++;
                                                    echo $hsl;
                                                    ?>
                                                    </td>
                                                </tr>
                                                <?php
                                                }
                                            }

                                            ?>
                                        </tbody>
                                    </table>
                                    <hr />
                                    <?php
                                      $TP = 0;$TN = 0;$FP = 0;$FN = 0;
                                        foreach ($confussion as $key1 => $value1) {
                                            foreach ($value1 as $key2 => $value2) {
                                              if($key1==$key2){
                                                $TP+=$value2;
                                              }else{
                                                $FP+=$value2;
                                              }
                                            }
                                        }
                                    ?>
                                    <table class="table">
                                      <tr>
                                        <td></td>
                                        <?php
                                          foreach ($confussion as $key1 => $value1) {
                                            ?>
                                            <td><?=$key1?></td>
                                            <?php
                                          }
                                        ?>
                                      </tr>
                                      <?php
                                        foreach ($confussion as $key1 => $value1) {
                                          ?>
                                          <tr>
                                            <td><?=$key1?></td>
                                            <?php
                                              foreach ($value1 as $key2 => $value2) {
                                                ?>
                                                <td><?=$confussion[$key1][$key2]?></td>
                                                <?php
                                              }
                                            ?>

                                          </tr>
                                          <?php
                                        }
                                      ?>

                                    </table>
                                    <?php
                                        $akurasi=$benar/(sizeof($dataset)-$ndatatrain)*100;
                                    ?>
                                    <div class="card card-body <?php if($akurasi<60){echo 'bg-danger';}else if($akurasi<80){echo 'bg-warning';}else{echo 'bg-primary';} ?> text-white">
                                        <h4 class="card-title mb-0 text-white">Hasil Akurasi : <?=round($akurasi,3)?>%</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    <?php
              }
            ?>
            </div>
            <div class="clearfix"></div>
        </div> <!-- end card-box -->
    </div> <!-- end Col -->
</div>
