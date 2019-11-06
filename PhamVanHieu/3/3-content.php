<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<!-- CODE -->
<div class="container">
    <div id="menu">
        <ul>
            <li><a href="3.php"><h4>Description</h4></a></li>
            <li><a href="3.1-content.php"><h4>Additional information</h4></a></li>
            <li><a href="./3.3-content.php"><h4>Reviews</h4></a></li>
            <li><a href="3.2-content.php"><h4>Shipping & Delivery</h4></a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3 style="text-align: center;">TEMPUS CONSECTETUR</h3>
            <br>
            <p>Ac dis vestibulum ut primis eleifend at neque at ornare mus nostra non senectus magna natoque porta scelerisque molestie taciti lobortis torquent ullamcorper a ullamcorper. Hac suspendisse varius ut et consectetur eu in nisi vestibulum consectetur ultricies in dictum consectetur eu hendrerit ante tortor sagittis etiam porta scelerisque molestie ostra non senectus magna natoque.</p>
            <br>
            <p>Vestibulum volutpat inceptos augue maecenas vehicula curae fringilla ridiculus consectetur tincidunt sit suspendisse rutrum facilisis nibh id ad scelerisque feugiat. Suspendisse habitasse aenean a at enim quis in congue a vestibulum lacinia tortor nam ridiculus.  Dictum consectetur eu hendrerit ante tortor sagittis etiam. Hac suspendisse varius ut et consectetur eu porta scelerisque molestie.</p>
        </div>
        <div class="col-md-6">
            <h3 style="text-align: center;">FIND YOUR SIZE</h3>
            <table>
                <tbody>
                    <tr>
                        <th>Size</th>
                        <th>CHEST</th>
                        <th>WAIST</th>
                        <th>HIPS</th>
                        <th>HEIGHT</th>
                        <th>AGE</th>
                    </tr>
                    <tr>
                        <td><strong>S</strong></td>
                        <td>6-7</td>
                        <td>64.5-66</td>
                        <td>59.5-61.5</td>
                        <td>68.5-71</td>
                        <td>122-128</td>
                    </tr>
                    <tr>
                        <td><strong>M</strong></td>
                        <td>6-7</td>
                        <td>64.5-66</td>
                        <td>59.5-61.5</td>
                        <td>68.5-71</td>
                        <td>122-128</td>
                    </tr>
                    <tr>
                        <td><strong>L</strong></td>
                        <td>6-7</td>
                        <td>64.5-66</td>
                        <td>59.5-61.5</td>
                        <td>68.5-71</td>
                        <td>122-128</td>
                    </tr>
                    <tr>
                        <td><strong>XL</strong></td>
                        <td>6-7</td>
                        <td>64.5-66</td>
                        <td>59.5-61.5</td>
                        <td>68.5-71</td>
                        <td>122-128</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
