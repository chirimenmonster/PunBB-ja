#!/bin/bash
#
#       /etc/rc.d/init.d/murmur-static
#
#       starts the murmur voip server
#
# chkconfig: - 95 80
# description: murmur is the server for the Mumble voip suite aimed at gamers
# processname: murmur.x86
# config: /opt/murmur-static_x86-1.2.10/murmur.ini
# pidfile: /opt/murmur-static_x86-1.2.10/murmur.pid

. /etc/rc.d/init.d/functions

murmur_home=/opt/murmur-static_x86-1.2.10
murmur=${murmur_home}/murmur.x86
prog=murmur.x86
lockfile=${murmur_home}/murmur.lock
RETVAL=0
INIFILE=${murmur_home}/murmur.ini
MURMUR_USER=mumble-server
MURMUR_GROUP=mumble-server
MURMUR_OPTS="-ini $INIFILE"

start() {
        echo -n "Starting mumble-server: "
	
	status $prog &> /dev/null # Mumble-server is running
	RETVAL=$?
	if [ $RETVAL -eq 0 ]; then
		success 
		echo
		return $RETVAL
	fi

	daemon "$murmur $MURMUR_OPTS"
	RETVAL=$?
	if [ $RETVAL -eq 0 ]; then
		touch "$lockfile" && success || failure
	fi
	echo
	return $RETVAL
}

stop() {
        echo -n "Shutting down mumble-server: "
	killproc $prog -INT
	RETVAL=$?
	if [ $RETVAL -eq 0 ]; then
		/bin/rm "$lockfile" 2> /dev/null && success || failure
	fi
	echo
	return $RETVAL
}

restart() {
	stop
	start
}

case "$1" in
    start)
        start
        ;;
    stop)
        stop
        ;;
    status)
	status $prog
	RETVAL=$?	
        ;;
    restart|force-reload)
	restart
        ;;
    reload)
        ;;
    condrestart)
        [ -f "$lockfile" ] && restart
	;;
    *)
        echo "Usage: <servicename> {start|stop|status|restart|reload|force-reload|condrestart}"
        exit 1
        ;;
esac
exit $RETVAL
