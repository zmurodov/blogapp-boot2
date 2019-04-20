package com.mrx.blogapp.blogappboot.dao;

import com.mrx.blogapp.blogappboot.entity.Category;
import org.springframework.data.jpa.repository.JpaRepository;

public interface CategoryDao extends JpaRepository<Category, String> {

}
