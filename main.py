from fastapi import FastAPI
from routers import users, products, chat, transactions, admin

app = FastAPI(title="중고거래 플랫폼 API")

app.include_router(users.router)
app.include_router(products.router)
app.include_router(chat.router)
app.include_router(transactions.router)
app.include_router(admin.router)

@app.get("/")
def root():
    return {"message": "Welcome to the Used Marketplace!"}
