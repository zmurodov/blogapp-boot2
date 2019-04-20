package com.mrx.blogapp.blogappboot.service;

import com.mrx.blogapp.blogappboot.dao.CategoryDao;
import com.mrx.blogapp.blogappboot.entity.Category;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

@Service
public class CategoryService {

    @Autowired
    private CategoryDao categoryDao;

    public Category getOne(String name) {
        return categoryDao.getOne(name);
    }

    public List<Category> findAll(){
        return categoryDao.findAll();
    }

    public Category save(Category category) {
        return categoryDao.save(category);
    }

    public void delete(Category category) {
        categoryDao.delete(category);
    }

    public boolean isPresent(String name) {
        Optional<Category> category = categoryDao.findById(name);

        return category.isPresent();
    }
}
