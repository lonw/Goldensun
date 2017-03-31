<!--News-->
<section id="news" class="recent-news space">
    <div class="container">
        <div class="col-sm-12 no-padding main-heading text-center">
            <h2 class="title">最新消息</h2>
        </div>
        <div class="row">
            <article class="col-sm-6 news-block">
              <div class="article-thumb">
                  <center> <h3 class="article-title"><a href="http://m.eqxiu.com/s/64xmoaiL?winzoom=1" target="_blank">奥兰多&坦帕房产推介会</a></h3> </center>
                  <a href="" target="_parent">
                      <center><img class="img-responsive" src="/images/20170306124026.jpg" alt=""></center>
                  </a>
              </div>
              <div class="article-info">
                       <center><p>主办单位： 金太阳金融 × 麒麟地产</p>
                      <p>活动时间：2017.03.18-19 下午1:00</p>
                      <p>地点：7270 Woodbine Ave, Suite 203, Markham</p></center>
              </div>
                <div class="article-thumb">
                    <a href="" target="_parent">
                      <center>  <h3 class="article-title">
                            <a href="page.php?title=Residential%20Mortgage&category=Loan" target="_parent">非居民如何在加拿大买房和贷款</a></h3></center>
                        <center><img class="img-responsive" src="/images/service2_medium.jpg" alt="" style="height:180px;width:360px;"></center>
                    </a>
                </div>
                <div class="article-info">

                    <p>加拿大政府对旅游、探亲、留学和工作签证的政策的放松，越来越多的非居民选择到加拿大投资买房。非加拿大居民买房一般分三种情况...</p>
                </div>

            </article>
            <div class="col-sm-6 blog-list">
                <?php $query = mysql_query('SELECT * FROM news where lang = 0');
                while ($data = mysql_fetch_assoc($query)) :
                ?>
                <article class="col-sm-12 news-block no-padding">
                    <div class="article-thumb pull-left">
                        <a href="#" target="_parent">
                            <img class="img-responsive" src="<?php echo $data['img'];?>" alt="<?php echo $data['title']; ?>">
                        </a>
                    </div>
                    <div class="article-info">
                        <h3 class="article-title">
                            <a href="<?php echo $data['link'];?>" target="_parent"><?php echo $data['title']; ?> </a></h3>
                        <ul class="meta">
                            <li> <i class="fa fa-calendar"></i>
                                <span class="sppb-meta-date"><?php echo $data['release_date'] ?></span></li>
                            <li> <i class="fa fa-user"></i>
                                <span class="sppb-meta-author">Super User</span></li>
                        </ul>
                        <p><?php echo $data['description']; ?></p>
                    </div>
                </article>
              <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
