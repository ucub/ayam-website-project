<?php
	include "koneksi_ip.php"
?>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.php?page=dashboard">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Masters</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
						  <li><a class="" href="index_admin.php?page=displaybarang">Barang</a></li>	
                          <li><a class="" href="index_admin.php?page=displaygerai">Gerai</a></li>                          
                          <li><a class="" href="index_admin.php?page=displaystok">Stok</a></li>
                      </ul>
                  </li> 
					<li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Transaction</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="index_admin.php?page=displayjual">Penjualan</a></li>                          
                          <?php 
                            $query = "SELECT
                                        *
                                    FROM
                                        gerai";
                            $sql = mysqli_query ($conn,$query);
                         	while ($hasil = mysqli_fetch_array ($sql)) { 
                         	    echo "<li><a class='' href='index_admin.php?page=displayjual&gerai=".$hasil['kd_gerai']."'>".$hasil['nama']."</a></li>";
                         	}
                          ?>
                      </ul>
                  </li> 				  
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
