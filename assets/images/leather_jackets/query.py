
import os

paths = "./"
listh = []
for i in os.walk(paths):
    print i
    listh =  i[2]
print i


listh = []


print listh

print len(listh)


for f in listh:
    
    title  = f.replace(".jpg", "")
   
    qury = """('49', '11', '"""+title+"""', '"""+title+"""', "Loro Piana  100% Wool Super 130's", "Loro Piana  100% Wool Super 130's", '', '800', '0', '', '800', '18ss1_master_style60001.png',
               '18sstyle_buttons.png', '18sfabricx0001.png', '', '10', '', '1', '', '1', '3 RF_LUCCIANO ROSSI PACKET 3', 'In Stock', '', '"""+title+"""', 39),"""
    
    
    print qury
