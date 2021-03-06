import mechanize
from time import sleep
import urllib

#Make a Browser (think of this as chrome or firefox etc)
br = mechanize.Browser()

#visit http://stockrt.github.com/p/emulating-a-browser-in-python-with-mechanize/
#for more ways to set up your br browser object e.g. so it look like mozilla
#and if you need to fill out forms with passwords.

# Open your site
br.open('http://www.mathcs.duq.edu/drozdek/DSinCpp/')

f=open("source.html","w")
f.write(br.response().read()) #can be helpful for debugging maybe

filetypes=[".zip",".h",".cpp",".txt"] #you will need to do some kind of pattern matching on your files
myfiles=[]
for l in br.links(): #you can also iterate through br.forms() to print forms on the page!
    for t in filetypes:
        if t in str(l): #check if this link has the file extension we want (you may choose to use reg expressions or something)
            myfiles.append(l)


def downloadlink(l):
    f=open(l.text,"w") #perhaps you should open in a better way & ensure that file doesn't already exist.
    print l
    # Link(base_url='http://www.mathcs.duq.edu/drozdek/DSinCpp/', url='AllFiles.zip', text='AllFiles.zip', tag='a', attrs=[('href', 'AllFiles.zip')])

    urllib.urlretrieve (l.base_url + l.url, l.text)
    # br.click_link(l)
    # f.write(br.response().read())

    print l.text," has been downloaded"
    #br.back()

for l in myfiles:
    #sleep(1) #throttle so you dont hammer the site
    downloadlink(l)
