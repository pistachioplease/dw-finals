@extends('layout/dashboard')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">CRON Log</h1>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <textarea class="form-control" rows="10">May 23 12:39:01 td-Lenovo-G40-70 CRON[31342]: (root) CMD (  [ -x /usr/lib/php5/maxlifetime ] && [ -x /usr/lib/php5/sessionclean ] && [ -d /var/lib/php5 ] && /usr/lib/php5/sessionclean /var/lib/php5 $(/usr/lib/php5/maxlifetime))
May 23 12:39:02 td-Lenovo-G40-70 CRON[31341]: (root) MAIL (mailed 1 byte of output; but got status 0x00ff, #012)
May 23 13:09:01 td-Lenovo-G40-70 CRON[9634]: (root) CMD (  [ -x /usr/lib/php5/maxlifetime ] && [ -x /usr/lib/php5/sessionclean ] && [ -d /var/lib/php5 ] && /usr/lib/php5/sessionclean /var/lib/php5 $(/usr/lib/php5/maxlifetime))
May 23 13:09:01 td-Lenovo-G40-70 CRON[9633]: (root) MAIL (mailed 1 byte of output; but got status 0x00ff, #012)
May 23 13:17:02 td-Lenovo-G40-70 CRON[11380]: (root) CMD (   cd / && run-parts --report /etc/cron.hourly)
May 23 13:39:01 td-Lenovo-G40-70 CRON[13081]: (root) CMD (  [ -x /usr/lib/php5/maxlifetime ] && [ -x /usr/lib/php5/sessionclean ] && [ -d /var/lib/php5 ] && /usr/lib/php5/sessionclean /var/lib/php5 $(/usr/lib/php5/maxlifetime))
May 23 13:39:01 td-Lenovo-G40-70 CRON[13080]: (root) MAIL (mailed 1 byte of output; but got status 0x00ff, #012)
May 23 14:09:01 td-Lenovo-G40-70 CRON[14467]: (root) CMD (  [ -x /usr/lib/php5/maxlifetime ] && [ -x /usr/lib/php5/sessionclean ] && [ -d /var/lib/php5 ] && /usr/lib/php5/sessionclean /var/lib/php5 $(/usr/lib/php5/maxlifetime))
May 23 14:09:01 td-Lenovo-G40-70 CRON[14466]: (root) MAIL (mailed 1 byte of output; but got status 0x00ff, #012)
May 23 14:17:01 td-Lenovo-G40-70 CRON[14834]: (root) CMD (   cd / && run-parts --report /etc/cron.hourly)
May 23 14:39:01 td-Lenovo-G40-70 CRON[16126]: (root) CMD (  [ -x /usr/lib/php5/maxlifetime ] && [ -x /usr/lib/php5/sessionclean ] && [ -d /var/lib/php5 ] && /usr/lib/php5/sessionclean /var/lib/php5 $(/usr/lib/php5/maxlifetime))
May 23 14:39:01 td-Lenovo-G40-70 CRON[16125]: (root) MAIL (mailed 1 byte of output; but got status 0x00ff, #012)
May 23 16:13:55 td-Lenovo-G40-70 cron[1021]: (CRON) INFO (pidfile fd = 3)
May 23 16:13:56 td-Lenovo-G40-70 cron[1093]: (CRON) STARTUP (fork ok)
May 23 16:13:56 td-Lenovo-G40-70 cron[1093]: (CRON) INFO (Running @reboot jobs)
May 23 16:16:29 td-Lenovo-G40-70 cron[1025]: (CRON) INFO (pidfile fd = 3)
May 23 16:16:29 td-Lenovo-G40-70 cron[1123]: (CRON) STARTUP (fork ok)
May 23 16:16:30 td-Lenovo-G40-70 cron[1123]: (CRON) INFO (Running @reboot jobs)
May 23 16:17:01 td-Lenovo-G40-70 CRON[2917]: (root) CMD (   cd / && run-parts --report /etc/cron.hourly)
May 23 16:18:53 td-Lenovo-G40-70 cron[1019]: (CRON) INFO (pidfile fd = 3)
May 23 16:18:53 td-Lenovo-G40-70 cron[1092]: (CRON) STARTUP (fork ok)
May 23 16:18:53 td-Lenovo-G40-70 cron[1092]: (CRON) INFO (Running @reboot jobs)
May 23 16:39:02 td-Lenovo-G40-70 CRON[7386]: (root) CMD (  [ -x /usr/lib/php5/maxlifetime ] && [ -x /usr/lib/php5/sessionclean ] && [ -d /var/lib/php5 ] && /usr/lib/php5/sessionclean /var/lib/php5 $(/usr/lib/php5/maxlifetime))
May 23 16:39:02 td-Lenovo-G40-70 CRON[7385]: (root) MAIL (mailed 1 byte of output; but got status 0x00ff, #012)
May 23 17:09:02 td-Lenovo-G40-70 CRON[9095]: (root) CMD (  [ -x /usr/lib/php5/maxlifetime ] && [ -x /usr/lib/php5/sessionclean ] && [ -d /var/lib/php5 ] && /usr/lib/php5/sessionclean /var/lib/php5 $(/usr/lib/php5/maxlifetime))
May 23 17:09:03 td-Lenovo-G40-70 CRON[9094]: (root) MAIL (mailed 1 byte of output; but got status 0x00ff, #012)
May 23 17:17:01 td-Lenovo-G40-70 CRON[9699]: (root) CMD (   cd / && run-parts --report /etc/cron.hourly)
May 23 17:39:02 td-Lenovo-G40-70 CRON[11080]: (root) CMD (  [ -x /usr/lib/php5/maxlifetime ] && [ -x /usr/lib/php5/sessionclean ] && [ -d /var/lib/php5 ] && /usr/lib/php5/sessionclean /var/lib/php5 $(/usr/lib/php5/maxlifetime))
May 23 17:39:03 td-Lenovo-G40-70 CRON[11079]: (root) MAIL (mailed 1 byte of output; but got status 0x00ff, #012)
May 23 18:13:12 td-Lenovo-G40-70 cron[1014]: (CRON) INFO (pidfile fd = 3)
May 23 18:13:12 td-Lenovo-G40-70 cron[1125]: (CRON) STARTUP (fork ok)
May 23 18:13:13 td-Lenovo-G40-70 cron[1125]: (CRON) INFO (Running @reboot jobs)
May 23 18:17:01 td-Lenovo-G40-70 CRON[5408]: (root) CMD (   cd / && run-parts --report /etc/cron.hourly)
May 23 18:39:01 td-Lenovo-G40-70 CRON[6618]: (root) CMD (  [ -x /usr/lib/php5/maxlifetime ] && [ -x /usr/lib/php5/sessionclean ] && [ -d /var/lib/php5 ] && /usr/lib/php5/sessionclean /var/lib/php5 $(/usr/lib/php5/maxlifetime))
May 23 18:39:02 td-Lenovo-G40-70 CRON[6617]: (root) MAIL (mailed 1 byte of output; but got status 0x00ff, #012)</textarea>
            </div>
        </div>
    </div>    
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')
<script>
$(document).ready(function() {
});
</script>
@endsection