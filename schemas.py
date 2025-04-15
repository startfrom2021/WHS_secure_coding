from pydantic import BaseModel
from typing import Optional
from datetime import datetime

class UserCreate(BaseModel):
    email: str
    password: str
    nickname: str

class ProductCreate(BaseModel):
    title: str
    description: str
    price: float

class MessageCreate(BaseModel):
    sender_id: int
    receiver_id: int
    content: str

class TransactionCreate(BaseModel):
    buyer_id: int
    seller_id: int
    product_id: int
    amount: float
