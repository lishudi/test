# -*- coding = utf-8 -*-
# @Time : 2021/3/15 12:20
# @Author : 李舒迪
# @File : 4 list.py
# @Software :PyCharm

# namelist =[]  定义一个空列表
'''
namelist = ["小燕", "小李", "小肖"]

print(namelist[1])
print(namelist[2])
print(namelist[0])

testlist = [1, "中文"] #列表可以存储混合类型
print(testlist[0])
print(testlist[1])
print(type(testlist[0]))
print(type(testlist[1]))


for name in namelist:
    print(name)

print(len(namelist))  # len()可以得到列表长度

length = len(namelist)
i = 0
while i < length:
    print("%d" % i, namelist[i])
    i += 1



print("------------增加名单前-----------")
namelist = ["小张",  "小赵", "小李"]
print(namelist)

namelist.append("小肖")
print("------------增加名单后-----------")
print(namelist)

namelist1 = input("请输入新增名字")
namelist.append(namelist1)   #在末尾追加元素
print("------------增加名单后-----------")
print(namelist)

a = [1, 2]
b = [3, 4]
c = [5, 6]
a.append(b)  #将列表b当作一个元素，加入a列表中
print(a)
a.extend(c)  #将列表c中的每个元素，逐一加入a列表中
print(a)

# 增 【insert】
a = [1, 2, 3]
a.insert(2, 3) #第一个变量表示下标，第二个表示元素（对象）
print(a)


# 删 【del , pop , remove】

movieName = ["泰坦尼克号", "蓝莓之夜", "蓝莓之夜", "东邪西毒", "初恋这件小事", "盗梦空间", "阿凡达"]

print("-------删除前的电影列表数据------")
for name in movieName:
    print(name)
del movieName[0]  # 在指定位置删除一个元素

print("-------删除后的电影列表数据------")
print(movieName)
movieName.pop()  # 弹出末尾最后一个元素
print(movieName)
movieName.remove("蓝莓之夜")  # 直接删除指定内容，重复数据只删除第一个
print(movieName)

movieName[3] = "重庆森林"  #修改指定下标的内容
print(movieName)


#查 ：【in , not in】

namelist = ["小张",  "小赵", "小李"]
findName = input("请输入查询内容：")
if findName in namelist:
    print("在名单中找到了相同元素")
else:
    print("没找到")
'''
'''
list = ["a", "b", "c", "a", "e"]

print(list.index("c", 1, 4))  # 查找指定下标范围[1-4）的元素，并显示对应元素的下标
print(list.index("b", 1, 3))  # 范围区间左闭右开 [1,3)
'''
'''
print(list.count("a"))  # 统计某个元素出现几次

# 排序与反转
a = [1,5,7,2,3,5,3,1,5,9]
print(a)
a.reverse() # 将列表元素反转
print(a)
a.sort()  # 升序
print(a)


schoolName = [["北京大学", "清华大学"], ["哈尔滨工业大学", "浙江大学"], ["复旦大学", "上海交大"]]
print(schoolName[1][1], end="\n")   # [行][列]
i = -1
j = -1
for i in range(-1, 2):

    i = i + 1
    for j in range(-1, 1):
        j = j + 1
        print(schoolName[i][j])
'''
'''
import random  # 引入随机函数

offices = [[], [], []]
names = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K"]

for name in names:
    index = random.randint(0, 2)  # 生成0-2范围的随机数
    offices[index].append(name)
    print(offices, end= name + "\n")

i = 1
for office in offices:
    print("办公室%d的人数为：%d" % (i, len(office)))
    i += 1
    for name in office:
        print("%s" % name, end="\t")
    print("\n" + "-"*20)
'''

products = [["iphone", 6888], ["MacPro", 14800], ["Coffee", 31]]
i = 0
for product in products:
    print(i, end="\t")
    i += 1
    for pro in product:
        print(pro, end="\t")
    print("\n")

choose = input("你想买什么？选择0-1数字")
shoppingList = [[], [], [], []]
if choose in range(0, 2):
    shoppingList[choose].append(products[choose])
    print(shoppingList+"")
