#!/bin/bash
#funzionante
raspivid --verbose --nopreview --width 640 --height 480 --framerate 15 --bitrate 1000000 --profile baseline --timeout 0 -o - | gst-launch-1.0 -v fdsrc ! h264parse ! rtph264pay config-interval=1 pt=96 ! udpsink host=127.0.0.1 port=8004
#aumento risoluzione non funziona
#raspivid --verbose --nopreview --width 2592 --height 1944 --framerate 15 --bitrate 1000000 --profile baseline --timeout 0 -o - | gst-launch-1.0 -v fdsrc ! h264parse ! rtph264pay config-interval=1 pt=96 ! udpsink host=127.0.0.1 port=8004
#aumento risoluzione
#raspivid --verbose --nopreview --width 1280 --height 960 --framerate 15 --bitrate 1000000 --profile baseline --timeout 0 -o - | gst-launch-1.0 -v fdsrc ! h264parse ! rtph264pay config-interval=1 pt=96 ! udpsink host=127.0.0.1 port=8004
#
#raspivid --verbose --nopreview --width 1280 --height 960 --framerate 15 --bitrate 1000000 --profile baseline --timeout 0 -o - | gst-launch-1.0 -v fdsrc ! h264parse ! rtph264pay config-interval=1 pt=96 ! hlssink max-files=5  playlist-root=http://192.168.0.49 location=/var/www/nginx80/httpstream playlist-location=/var/www/httpstream
#http://192.168.0.49/httpstream/playlist.m3u8
#raspivid -t 0 -h 720 -w 1080 -fps 25 -hf -b 2000000 -o - | gst-launch-1.0 -v fdsrc ! h264parse !  rtph264pay config-interval=1 pt=96 ! gdppay ! tcpserversink host=127.0.0.1 port=5000
#http://192.168.0.49:5000
#/opt/vc/bin/raspivid -o - -t 0 -hf -w 640 -h 360 -fps 25|cvlc -vvv stream:///dev/stdin --sout '#standard{access=http,mux=ts,dst=:8090}' :demux=h264
#
#tcp
raspivid --verbose --nopreview --width 640 --height 480 --framerate 15 --bitrate 1000000 --profile baseline --timeout 0 -o - | gst-launch-1.0 -v fdsrc ! h264parse ! rtph264pay config-interval=1 pt=96 ! tcpserversink host=192.168.10.1 port=8080

gst-launch-0.10 videotestsrc ! tcpserversink host=192.168.10.1 port=8080

command = '(echo "--video boundary--"; curl -s http://trendnetcam/video.cgi;) | gst-launch fdsrc do-timestamp=true ! multipartdemux boundary="video boundary--" ! jpegdec ! videorate ! video/x-raw-yuv,framerate=4/1 ! theoraenc ! oggmux !  filesink location=/dev/stdout'
command = '(
raspivid --verbose --nopreview --width 640 --height 480 --framerate 15 --bitrate 1000000 --profile baseline --timeout 0 -o - | gst-launch fdsrc do-timestamp=true ! multipartdemux boundary="video boundary--" ! jpegdec ! videorate ! video/x-raw-yuv,framerate=4/1 ! theoraenc ! oggmux !  filesink location=/dev/stdout

command = '(raspivid --verbose --nopreview --width 640 --height 480 --framerate 15 --bitrate 1000000 --profile baseline --timeout 0 -o - | gst-launch fdsrc do-timestamp=true ! h264parse ! rtph264pay config-interval=1 pt=96 !  filesink location=/dev/stdout'
