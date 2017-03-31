<!--News-->
<section id="news" class="recent-news space">
    <div class="container">
        <div class="col-sm-12 no-padding main-heading text-center">
            <h2 class="title">Recent news</h2>
        </div>
        <div class="row">
            <article class="col-sm-6 news-block">
              <div class="article-thumb">
                  <center> <h3 class="article-title"><a href="http://m.eqxiu.com/s/64xmoaiL?winzoom=1" target="_blank">Orlando&Tampa Real Estate Conference</a></h3> </center>
                  <a href="" target="_parent">
                      <center><img class="img-responsive" src="/images/20170306124026.jpg" alt=""></center>
                  </a>
              </div>
              <div class="article-info">
                       <center><p>Sponsor: Goldensun Capital × 麒麟地产</p>
                      <p>Date：2017.03.18-19 下午1:00</p>
                      <p>Address：7270 Woodbine Ave, Suite 203, Markham</p></center>
              </div>
                <div class="article-thumb">
                  <h3 class="article-title">
                      <a href="#" target="_parent">How does a non-resident buy a house in Canada and apply for mortgage?</a></h3>
                    <a href="" target="_parent">
                        <center><img class="img-responsive" src="/images/service2_medium.jpg" style="height:220px;" alt="Achived trophy on Industrial managment."></center>
                    </a>
                </div>
                <div class="article-info">

                    <ul class="meta">
                        <li> <i class="fa fa-calendar"></i>
                            <span class="sppb-meta-date">20 April 2016</span></li>
                        <li> <i class="fa fa-user"></i>
                            <span class="sppb-meta-author">Super User</span></li>
                    </ul>
                    <p>The Canadian government to relax the tourism, visiting relatives, study and work visa policy, more and more non-residents choose to invest in Canada to buy a house. Non-Canadian residents to buy a house generally divided into three cases ...</p>
                </div>
            </article>
            <div class="col-sm-6 blog-list">
                <?php $query = mysql_query('SELECT * FROM news where lang = 1');
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
