import urllib2
import simplejson
import json

url = "https://api.trello.com/1/organizations/piponline?members=all&member_fields=username,fullName&fields=name,desc&key=daad4d77e580ebd5d2d522f439b07f74&token=d21b767f5a68c5bba7d9405ca2c064a3857048c56ae8992d41cc383547adf3dd"



if __name__ == "__main__":
    req = urllib2.Request(url)
    opener = urllib2.build_opener()
    f = opener.open(req)
    json = simplejson.load(f)
    parent = json["members"]
    for item in parent:
        try:
            print "\nID: ", item["id"] 
            print "Username: ", item["username"]
            print "Full Name: ", item["fullName"]
        except:
            print "Not happy"
            
