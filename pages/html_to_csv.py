import bs4
import csv

with open("pages/publications.html", "r") as f:
    raw = f.read()
parsed = bs4.BeautifulSoup(raw, features="lxml")

rows = parsed.find_all("tr")
data = []
for row in rows:
    children = row.find_all("td")
    td_0 = list(children[0].children)
    td_1 = list(children[1].children)
    # children[0][0] title
    # children[0][3] authors
    title = td_0[0]
    authors = td_0[3].text.strip()
    # print(children[1])

    link_name = td_1[0].text
    link_href= children[1].find("a")
    if link_href:
        link_href = link_href.get("href")
    else:
        link_href= ""

    data.append([title, authors, link_name, link_href])

with open("pages/publications.csv", "w") as f:
    csv.writer(f, quoting=csv.QUOTE_ALL).writerows(data)